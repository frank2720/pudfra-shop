<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    

    public function product_details($id)
    {
        $nav_products = Product::with('images')->get();
        $product = Product::with('images')->find($id);
        $latest = Product::with('images')
                        ->latest()
                        ->paginate(8);
        $oldCart = session()->get('cart');
        //dd(session()->get('cart'));
        $cart = new Cart($oldCart);
        return view('product-detail', 
        ['product'=>$product,
        'nav_products'=>$nav_products,
        'latest'=>$latest,
        'cart_products'=>$cart->items,
        'totalPrice'=>$cart->totalPrice]);
    }
}
