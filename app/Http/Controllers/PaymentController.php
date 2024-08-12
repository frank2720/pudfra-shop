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

        $token=$this->access_token;
        
        $this->Express_url = env('EXPRESS_URL');
        
        
        $this->passKey =env('PASS_KEY');
        $Timestamp=Carbon::now()->format('YmdHis');
        $cart = new Cart(session()->get('cart'));

        $this->BusinessShortCode=env('SHORTCODE');
        $password=base64_encode($this->BusinessShortCode.$this->passKey.$Timestamp);
        $this->TransactionType=env('TRANSC_TYPE');
        $Amount=$cart->totalPrice;
        $PartyA=preg_replace('/^0/','254',str_replace("+","",$request->phone));
        $PartyB=env('PARTY_B');
        $PhoneNumber=$PartyA;
        $this->callbackURL=env('CALL_BACK_URL');
        $AccountReference='Maanar-shop';
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
        User::find(Auth::user()->id)->notify(new OrderSuccessful($stkrequest->Amount));
        toastr()->success($responseData->CustomerMessage,'STK request');

        return redirect()->back();
    }

    public function stkcallback()
    {
        $data = file_get_contents('php://input');
        Storage::disk('public')->put('products',$data);
        return $data;
    }
}
