<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    

    public function product_details($id)
    {
        $nav_products = Product::with('images')->get();
        $categories =  Category::all();
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
        'categories'=>$categories,
        'nav_products'=>$nav_products,
        'latest'=>$latest,
        'cart_products'=>$cart->items,
        'totalPrice'=>$cart->totalPrice]);
    }

    public function products()
    {
        $products = Product::with('images')->get();
        $productsAZ = Product::with('images')->orderBy('name','asc')->get();
        $productsZA = Product::with('images')->orderBy('name','desc')->get();
        $productsLH = Product::with('images')->orderBy('price','asc')->get();
        $productsHL = Product::with('images')->orderBy('price','desc')->get();

        $categories =  Category::all();

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
        'productsAZ'=>$productsAZ,
        'productsZA'=>$productsZA,
        'productsLH'=>$productsLH,
        'productsHL'=>$productsHL,
        'nav_products'=>$nav_products,
        'categories'=>$categories,
        'latest'=>$latest,
        'cart_products'=>$cart->items,
        'totalPrice'=>$cart->totalPrice]);
    }
}
