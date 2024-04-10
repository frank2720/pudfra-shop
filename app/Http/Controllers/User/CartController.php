<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::with('images')->find($id);
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
        return response()->json([
            'cart_products'=>$cart->items,
            'totalQty'=>$cart->totalQty,
            'subtotal'=>$cart->totalPrice,
        ]);
    }
    
    public function removefromCart(Request $request, $id)
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        $request->session()->put('cart',$cart);
        return response()->json([
            'totalQty'=>$cart->totalQty,
            'subtotal'=>$cart->totalPrice
        ]);
    }

    public function reduceInCart(Request $request, $id)
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduce($id);

        $request->session()->put('cart',$cart);
        return response()->json([
            'totalQty'=>$cart->totalQty??0,
            'subtotal'=>$cart->totalPrice??0,
            'productquantity'=>$cart->items[$id]['qty']??0
        ]);
    }
}
