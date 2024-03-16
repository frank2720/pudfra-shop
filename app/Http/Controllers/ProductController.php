<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(8);
        return view('admin.index',['products'=>$products]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'price'=>'required',
            'retail_price'=>'required',
            'description'=>'required|string',
            'img.*'=>'required|image',
        ],
        [
            'name.required'=>'Product name required',
            'price.required'=>'Product price required',
            'retail_price.required'=>'Product retail price required',
            'description.required'=>'Product description required',
            'img.required'=>'Upload product image',
            'img.image'=>'file must be an image'
            
        ]);
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->retail_price = $request->retail_price;
        $product->description = $request->description;
        $product->save();

        foreach ($request->file('img') as $imagefile) {
            $image = new Image;
            $path =  $imagefile->store('public');
            //$path =Storage::disk('public')->put('/',$imagefile);
            $image->url = $path;
            $image->product_id = $product->id;
            $image->save();
        }
        return response()->json([]);
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
}
