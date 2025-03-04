<?php

namespace App\Http\Controllers\Auth;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Swap\Laravel\Facades\Swap;
use Torann\GeoIP\Facades\GeoIP;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function showLoginForm()
    {

        $categories =  Category::with('subcategories')->get();
        
        $trending_products = Product::with('entity')
                                ->inRandomOrder()
                                ->paginate(12);

        $json_data = File::get(storage_path('app/public/towns/towns.json'));

        $towns = json_decode($json_data);

        $bestsales = Product::with('entity')
                        ->inRandomOrder()
                        ->paginate(8);

        $latest = Product::with('entity')
                        ->latest()
                        ->paginate(8);

        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);

        return view('auth.login',[
            'towns'=>$towns,
            'categories'=> $categories,
            'trending_products'=>$trending_products,
            'bestsales'=>$bestsales,
            'latest'=>$latest,
            'cart_products'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
