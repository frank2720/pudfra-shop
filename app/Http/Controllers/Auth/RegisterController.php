<?php

namespace App\Http\Controllers\Auth;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public function showRegistrationForm()
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

        return view('auth.register',[
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
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
