<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    

    public function product_details($id)
    {
        $nav_products = Product::with('images')->get();
        $json_data = File::get(storage_path('app/public/towns/towns.json'));

        $towns = json_decode($json_data);
        $product = Product::with('images')->find($id);
        $latest = Product::with('images')
                        ->latest()
                        ->paginate(8);
        $oldCart = session()->get('cart');
        //dd(session()->get('cart'));
        $cart = new Cart($oldCart);
        return view('product-detail', [
        'towns'=>$towns,
        'product'=>$product,
        'nav_products'=>$nav_products,
        'latest'=>$latest,
        'cart_products'=>$cart->items,
        'totalPrice'=>$cart->totalPrice]);
    }

    public function products()
    {
        $products = Product::with('images')->get();
        $nav_products = Product::with('images')->get();
        $latest = Product::with('images')
                        ->latest()
                        ->paginate(8);
        $oldCart = session()->get('cart');
        $json_data = File::get(storage_path('app/public/towns/towns.json'));

        $towns = json_decode($json_data);
        //dd(session()->get('cart'));
        $cart = new Cart($oldCart);
        return view('shop',[
        'towns'=>$towns,
        'products'=>$products,
        'nav_products'=>$nav_products,
        'latest'=>$latest,
        'cart_products'=>$cart->items,
        'totalPrice'=>$cart->totalPrice]);
    }
}
