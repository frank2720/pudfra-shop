<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    

    public function products_paginate(): View
    {
        $products = Product::orderBy('name')->paginate(8);
        $categories = Category::all();
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        return view('shop_paginate', [
            'products'=>$products,
            'categories'=>$categories,
            'cart_products'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }
}
