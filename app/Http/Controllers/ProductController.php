<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function home_products(Request $request)
    {
        $nav_products = Product::with('images')->get();

        $trending_products = Product::with('images')
                                ->latest()
                                ->paginate(8);

        $bestsales = Product::with('images')
                        ->whereColumn('retail_price','>','price')
                        ->paginate(4);

        $latest = Product::with('images')
                        ->latest()
                        ->paginate(8);

        $oldCart = session()->get('cart');
        //dd(session()->get('cart'));
        $cart = new Cart($oldCart);

        if ($request->ajax()) {
            $view = view('trend', compact('trending_products'))->render();
            
            return response()->json(['html' => $view]);
        }
        return view('home',[
            'nav_products'=>$nav_products,
            'trending_products'=>$trending_products,
            'bestsales'=>$bestsales,
            'latest'=>$latest,
            'cart_products'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
        return response()->json(['totalQty'=>$cart->totalQty,'subtotal'=>$cart->totalPrice]);
    }
    
    public function removefromCart(Request $request, $id)
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        $request->session()->put('cart',$cart);
        return response()->json(['totalQty'=>$cart->totalQty,'subtotal'=>$cart->totalPrice]);
    }

    public function index()
    {
        $products = Product::paginate(8);
        return view('admin.dashboard', ['products'=>$products]);
    }

    public function pagination(Request $request)
    {
        $products = Product::paginate(8);
        return view('admin.pagination_dash', ['products'=>$products]);
    }
    
    public function create():View
    {
        return view('admin.add_product');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'price'=>'required',
            'retail_price'=>'required',
            'description'=>'required|string',
            'img'=>'required',
        ],
        [
            'name.required'=>'Product name required',
            'price.required'=>'Product price required',
            'retail_price.required'=>'Product retail price required',
            'description.required'=>'Product description required',
            'img.required'=>'Upload product image',
            
        ]);
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->retail_price = $request->retail_price;
        $product->description = $request->description;
        $product->save();

        foreach ($request->file('img') as $imagefile) {
            $image = new Image;
            $path =  $imagefile->store('/assets/images/products', ['disk' =>   'my_files']);
            $image->url = $path;
            $image->product_id = $product->id;
            $image->save();
        }
        return response()->json([]);
    }
    

    public function products(): View
    {
        $products = Product::orderBy('name')->paginate(8);
        $categories = Category::all();
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        return view('shop', [
            'products'=>$products,
            'categories'=>$categories,
            'cart_products'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }

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

    public function product_search(Request $request): View
    {
        $products = Product::where('name','like', '%'.$request->search_string.'%')
        ->orwhere('price','like', '%'.$request->search_string.'%')
        ->orderBy('name')
        ->paginate(8);
        if (count($products) >=1) {
            return view('shop_search', [
                'products'=>$products,
            ]);
        } else {
            return view('search_error');
        }
    }

    public function reduceInCart(Request $request, $id)
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduce($id);

        $request->session()->put('cart',$cart);
        return response()->json();
    }
}
