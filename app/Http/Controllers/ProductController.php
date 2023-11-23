<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  
    /**
     * Gets the products from the db and display them in the shopping page
     */

    public function products(): View
    {
        $products = DB::table('products')->orderBy('name')->simplePaginate(10);
        return view('shop', ['products'=>$products]);
    }

    /**
     * Gets a product details from the db using the product id
     */
    public function product(Request $request, string $id): View
    {
        $product = DB::table('products')->find($id);
        return view('product', ['product'=>$product]);
    }

    /**
     * Gets 8 recently added products, and display them in the landing/home page
     */
    public function recent_products(): View
    {
         $recent_products = DB::table('products')->latest()->paginate(8);
         return view('welcome', ['recent_products'=>$recent_products]);
    }

    /**
     * Gets the product from the db using id for a session
     */
    public function addToCart(Request $request, $id):RedirectResponse
    {
        $product = DB::table('products')->find($id);
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return redirect('/shop');
    }

    public function getCart()
    {
        if (session()->missing('cart'))
        {
            return view('cart');
        }
        $oldCart = session()->get('cart');
        //dd(session()->get('cart'));
        $cart = new Cart($oldCart);
        return view('cart', ['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }
}
