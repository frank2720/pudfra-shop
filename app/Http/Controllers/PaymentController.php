<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use App\Models\StkRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function initiatestk(Request $request)
    {
        $cKey = env('CONSUMER_KEY');
        $cSecret = env('SECRET_KEY');
        $aUrl = env('AUTH_URL');
        $AccessToken = new Payment($cKey,$cSecret,$aUrl);
        $token=$AccessToken->authorization();
        
        $Express_url = env('EXPRESS_URL');
        $TransactionType=env('TRANSC_TYPE');
        $callbackURL=env('CALL_BACK_URL');
        $passKey =env('PASS_KEY');
        $BusinessShortCode=env('SHORTCODE');
        $PartyB=env('PARTY_B');
        $Timestamp=Carbon::now()->format('YmdHis');
        $cart = new Cart(session()->get('cart'));

        $password=base64_encode($BusinessShortCode.$passKey.$Timestamp);
        $Amount=$cart->totalPrice;
        $PartyA=preg_replace('/^0/','254',str_replace("+","",$request->phone));
        $PhoneNumber=$PartyA;
        $AccountReference='Maanar-shop';
        $TransactionDesc='pay for the goods';

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
        return $res->CustomerMessage;
    }

    public function stkcallback()
    {
        $data = file_get_contents('php://input');
        Storage::disk('local')->put('PaymentsInfo.json',$data);
        $response = json_decode($data);

        $CallbackMetadata = $response->Body->stkCallback->CallbackMetadata->Item;
	    $Item = array_column($CallbackMetadata,'Value','Name');

        if ($response->Body->stkCallback->ResultCode==0) {
            $payment = StkRequest::where('CheckoutRequestID','=',$response->Body->stkCallback->CheckoutRequestID)->firstOrFail();
            $payment->Status='Paid';
            $payment->Receipt=$Item["MpesaReceiptNumber"];
            $payment->TransactionDate=$Item["TransactionDate"];
            $payment->save();
        } else {
            $payment = StkRequest::where('CheckoutRequestID','=',$response->Body->stkCallback->CheckoutRequestID)->firstOrFail();
            $payment->Status='Failed';
            $payment->save();
        }
    }
}
