<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cookie;

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

    public function increaseQty(Request $request, $id)
    {
        $product = Product::with('images')->find($id);
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart',$cart);
        return back();
    }

    public function reduceQty(Request $request, $id)
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduce($id);
        $request->session()->put('cart',$cart);
        return back();
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
            'productquantity'=>$cart->items[$id]['qty']??0,
        ]);
    }
    
    public function removeProduct(Request $request, $id)
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        $request->session()->put('cart',$cart);
        return back();
    }
    public function removefromCart(Request $request, $id)
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        $request->session()->put('cart',$cart);
        return response()->json([
            'totalQty'=>$cart->totalQty,
            'subtotal'=>$cart->totalPrice,
        ]);
    }

    public function getCart()
    {
        
        $products = Product::with('images')->get();
        $categories =  Category::all();
        $latest = Product::with('images')
                        ->latest()
                        ->paginate(8);
        $trending_products = Product::with('images')
                ->latest()
                ->paginate(8);

        $recentlyViewed = json_decode(Cookie::get('recently_viewed', '[]'), true);
        $recommendedProducts = Product::whereIn('id', $recentlyViewed)->with('images')->get();

        $json_data = File::get(storage_path('app/public/towns/towns.json'));

        $towns = json_decode($json_data);
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        return view('shopping_cart',[
        'towns'=>$towns,
        'products'=>$products,
        'categories'=> $categories,
        'trending_products'=>$trending_products,
        'latest'=>$latest,
        'recommendedProducts'=>$recommendedProducts,
        'cart_products'=>$cart->items,
        'totalPrice'=>$cart->totalPrice]);
    }
}
