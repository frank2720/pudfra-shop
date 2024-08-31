<?php

namespace App\Http\Controllers\Auth;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Swap\Laravel\Facades\Swap;
use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Access\AuthorizationException;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    public function show(Request $request)
    {
        $location = GeoIP::getLocation(env('IP_ADDRESS'));
        $currency = $location->currency;
        $rate = Swap::latest('EUR/'.$currency['code']);
        $currencyExchangeRate = $rate->getValue();

        $name = $rate->getProviderName();
        
        $nav_products = Product::with('images')->get();

        $categories =  Category::all();
        
        $trending_products = Product::with('images')
                                ->inRandomOrder()
                                ->paginate(12);

        $json_data = File::get(storage_path('app/public/towns/towns.json'));

        $towns = json_decode($json_data);

        $bestsales = Product::with('images')
                        ->inRandomOrder()
                        ->paginate(8);

        $latest = Product::with('images')
                        ->latest()
                        ->paginate(8);

        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);

        return $request->user()->hasVerifiedEmail()
                        ? redirect($this->redirectPath()) 
                        : view('auth.verify',[
                            'currencyExchangeRate'=>$currencyExchangeRate,
                            'currency'=>$currency["symbol"],
                            'towns'=>$towns,
                            'nav_products'=>$nav_products,
                            'categories'=> $categories,
                            'trending_products'=>$trending_products,
                            'bestsales'=>$bestsales,
                            'latest'=>$latest,
                            'cart_products'=>$cart->items,
                            'totalPrice'=>$cart->totalPrice,
                        ]);
    }

    public function verify(Request $request)
    {
        if (! hash_equals((string) $request->route('id'), (string) $request->user()->getKey())) {
            throw new AuthorizationException;
        }

        if (! hash_equals((string) $request->route('hash'), sha1($request->user()->getEmailForVerification()))) {
            throw new AuthorizationException;
        }

        if ($request->user()->hasVerifiedEmail()) {
            return $request->wantsJson()
                        ? new JsonResponse([], 204)
                        : redirect($this->redirectPath());
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        if ($response = $this->verified($request)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 204)
                    :  redirect($this->redirectPath())->with(toastr()->success('Your email has been verified.','Verified'), true);
    }

    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return $request->wantsJson()
                        ? new JsonResponse([], 204)
                        : redirect($this->redirectPath());
        }

        $request->user()->sendEmailVerificationNotification();

        return $request->wantsJson()
                    ? new JsonResponse([], 202)
                    : back()->with(toastr()->success('A fresh verification link has been sent to your email address.','Resent'), true);
    }

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
