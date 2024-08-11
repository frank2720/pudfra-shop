<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Payment;
use App\Models\StkRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Notifications\OrderSuccessful;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{

    protected $access_token;
    public function __construct()
    {
        $consumerKey = env('CONSUMER_KEY');
        $consumerSecret = env('SECRET_KEY');
        $auth_url = env('AUTH_URL');
        
        $response=Http::withBasicAuth($consumerKey,$consumerSecret)->get($auth_url);
        $this->access_token = $response['access_token'];
    }

    public function initiatestk(Request $request)
    {

        $token=$this->access_token;
        
        $Express_url = env('EXPRESS_URL');
        
        
        $passKey =env('PASS_KEY');
        $Timestamp=Carbon::now()->format('YmdHis');
        $cart = new Cart(session()->get('cart'));

        $BusinessShortCode=env('SHORTCODE');
        $password=base64_encode($BusinessShortCode.$passKey.$Timestamp);
        $TransactionType=env('TRANSC_TYPE');
        $Amount=$cart->totalPrice;
        $PartyA=preg_replace('/^0/','254',str_replace("+","",$request->phone));
        $PartyB=env('PARTY_B');
        $PhoneNumber=$PartyA;
        $callbackURL=env('CALL_BACK_URL');
        $AccountReference='Maanar-shop';
        $TransactionDesc='Order the Product';

        try {
            $response=Http::withToken($token)->post($Express_url,[
                'BusinessShortCode'=>$BusinessShortCode,
                'Password'=>$password,
                'Timestamp'=>$Timestamp,
                'TransactionType'=>$TransactionType,
                'Amount'=>$Amount,
                'PartyA'=>$PartyA,
                'PartyB'=>$PartyB,
                'PhoneNumber'=>$PhoneNumber,
                'CallBackURL'=>$callbackURL,
                'AccountReference'=>$AccountReference,
                'TransactionDesc'=>$TransactionDesc
            ]);
        } catch (\Throwable $error) {
            return $error->getMessage();
        }

        $res = json_decode($response);
        $stkrequest = new StkRequest;
        $stkrequest->PhoneNumber=$PhoneNumber;
        $stkrequest->Amount=$Amount;
        $stkrequest->MerchantRequestID=$res->MerchantRequestID;
        $stkrequest->CheckoutRequestID=$res->CheckoutRequestID;
        $stkrequest->Status='Requested';
        $stkrequest->save();

        User::find(Auth::user()->id)->notify(new OrderSuccessful($stkrequest->Amount));
        toastr()->success($res->CustomerMessage);

        return redirect()->back();
    }

    public function stkcallback()
    {
        $data = file_get_contents('php://input');
        Storage::disk('public')->put('stk.txt',$data);

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
    }
}
