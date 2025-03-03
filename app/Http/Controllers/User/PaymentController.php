<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\User;
use App\Models\StkRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Notifications\OrderSuccessful;

class PaymentController extends Controller
{

    public $access_token;
    public $consumerKey;

    public $consumerSecret;
    public $auth_url;
    public $Express_url;
    public $passKey;
    public $BusinessShortCode;
    public $TransactionType;
    public $callbackURL;
    public function __construct()
    {
        $this->consumerKey = env('CONSUMER_KEY');
        $this->consumerSecret = env('SECRET_KEY');
        $this->auth_url = env('AUTH_URL');
        
        $response=Http::withBasicAuth($this->consumerKey,$this->consumerSecret)->get($this->auth_url);
        $this->access_token = $response['access_token'];
    }

    public function initiatestk(Request $request)
    {

        $cart = new Cart(session()->get('cart'));

        if ($cart->totalPrice==null) {
            toastr()->warning('No products in cart','Cart empty');
            return redirect()->back();
        }
        
        $token=$this->access_token;
        
        $this->Express_url = env('EXPRESS_URL');
        
        
        $this->passKey =env('PASS_KEY');
        $Timestamp=Carbon::now()->format('YmdHis');

        $this->BusinessShortCode=env('SHORTCODE');
        $password=base64_encode($this->BusinessShortCode.$this->passKey.$Timestamp);
        $this->TransactionType=env('TRANSC_TYPE');
        $Amount=$cart->totalPrice;
        $PartyA=preg_replace('/^0/','254',str_replace("+","",$request->phone));
        $PartyB=env('PARTY_B');
        $PhoneNumber=$PartyA;
        $this->callbackURL=env('CALL_BACK_URL');
        $AccountReference='MaanarShop';
        $TransactionDesc='Order the Product';

        try {
            $response=Http::withToken($token)->post($this->Express_url,[
                'BusinessShortCode'=>$this->BusinessShortCode,
                'Password'=>$password,
                'Timestamp'=>$Timestamp,
                'TransactionType'=>$this->TransactionType,
                'Amount'=>$Amount,
                'PartyA'=>$PartyA,
                'PartyB'=>$PartyB,
                'PhoneNumber'=>$PhoneNumber,
                'CallBackURL'=>$this->callbackURL,
                'AccountReference'=>$AccountReference,
                'TransactionDesc'=>$TransactionDesc
            ]);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }

        $responseData = json_decode($response);
        
        $stkrequest = new StkRequest;
        $stkrequest->PhoneNumber=$PhoneNumber;
        $stkrequest->Amount=$Amount;
        $stkrequest->MerchantRequestID=$responseData->MerchantRequestID;
        $stkrequest->CheckoutRequestID=$responseData->CheckoutRequestID;
        $stkrequest->Status='Requested';
        $stkrequest->save();
        User::find(1)->notify(new OrderSuccessful($stkrequest->Amount,Auth::user()->name));
        toastr()->success($responseData->CustomerMessage,'STK request');

        return redirect()->back();
    }

    public function stkcallback(Request $request)
    {
        $data = $request->getContent();
        $response = json_decode($data,true);
        $Item = $response['Body']['stkCallback']['CallbackMetadata']['Item'];

        $mpesaData = array_column($Item,'Value','Name');

        $metaData = [
            'MerchantRequestID'=> $response['Body']['stkCallback']['MerchantRequestID'],
            'CheckoutRequestID'=> $response['Body']['stkCallback']['CheckoutRequestID'],
            'ResultCode'=> $response['Body']['stkCallback']['ResultCode'],
            'ResultDesc'=> $response['Body']['stkCallback']['ResultDesc']
        ];

        $mpesaMetaData = array_merge($mpesaData,$metaData);

        if ($mpesaMetaData['ResultCode'] == 0) {
            $payment = StkRequest::where('CheckoutRequestID',$mpesaMetaData['CheckoutRequestID'])->first();
            $payment->Status='Paid';
            $payment->ResultDesc=$mpesaMetaData['ResultDesc'];
            $payment->Receipt=$mpesaMetaData["MpesaReceiptNumber"];
            $payment->TransactionDate=date("Y-m-d h:i:s",strtotime($mpesaMetaData["TransactionDate"]));
            $payment->update();
        } else {
            $payment = StkRequest::where('CheckoutRequestID',$mpesaMetaData['CheckoutRequestID'])->firstOrFail();
            $payment->Status='Failed';
            $payment->update();
        }

        return $mpesaData;
    }
}
