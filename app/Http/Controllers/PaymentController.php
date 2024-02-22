<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    /**
     * Get the access token.
     */
    public function token()
    {
        $consumerKey = env('MPESA_CONSUMER_KEY');
        $consumerSecret = env('MPESA_SECRET_KEY');
        $url = env('MPESA_AUTH_URL');

        $response=Http::withBasicAuth($consumerKey,$consumerSecret)->get($url);
        return $response['access_token'];
    }

    /**
     * Initiate the stk push.
     */
    public function initiatestk(Request $request)
    {
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        
        $request->validate([
            'phone'=>'required',
        ],
        [
            'phone.required'=>'phone number required',
        ]);
        
        $accessToken = $this->token();
        $url = env('MPESA_EXPRESS_URL');
        $passKey =env('PASS_KEY');
        $BusinessShortCode=env('SHORTCODE');
        $Timestamp=Carbon::now()->format('YmdHis');
        $password=base64_encode($BusinessShortCode.$passKey.$Timestamp);
        $TransactionType=env('TRANSC_TYPE');
        $Amount=$cart->totalPrice;
        $PartyA=preg_replace('/^0/','254',str_replace("+","",$request->phone));
        $PartyB=env('PARTY_B');
        $PhoneNumber=$PartyA;
        $callbackURL=env('CALL_BACK_URL');
        $AccountReference='pudfra12';
        $TransactionDesc='pay for the goods';

        $response=Http::withToken($accessToken)->post($url,[
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

        //return json_decode($response);
        //return response()->json([]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
