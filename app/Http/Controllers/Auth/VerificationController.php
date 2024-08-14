<?php

namespace App\Http\Controllers\Auth;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Auth\VerifiesEmails;

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
