<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('admin.add_product');
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'price'=>'required',
            'retail_price'=>'required',
            'description'=>'required|string',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ],
        [
            'name.required'=>'Product name required',
            'price.required'=>'Product price required',
            'retail_price.required'=>'Product retail price required',
            'description.required'=>'Product description required',
            'img.required'=>'Upload product image',
            
        ]);
        $product_image =  $request->file('img')->store(options:'public');

        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'retail_price'=>$request->retail_price,
            'description'=>$request->description,
            'img'=>$product_image,
        ]);
        return response()->json([]);
    }
    
    /**
     * Gets the products from the db and display them in the shopping page
     */

    public function products(): View
    {
        $products = Product::orderBy('name')->paginate(16);
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

    /**
     * Gets 8 recently added products, and display them in the landing/home page
     */
    public function recent_products(): View
    {
        $recent_products = Product::latest()->paginate(8);
        $categories = Category::all();
        $oldCart = session()->get('cart');
        //dd(session()->get('cart'));
        $cart = new Cart($oldCart);
        return view('home', [
          'recent_products'=>$recent_products,
          'categories'=>$categories,
          'cart_products'=>$cart->items,
          'totalPrice'=>$cart->totalPrice,
        ]);
    }

    /**
     * Gets the product from the db using id for a session
     */
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
        return response()->json(['totalQty'=>$cart->totalQty]);
    }

   /* public function getCart()
    {
        if (session()->missing('cart'))
        {
            return view('cart');
        }
        $oldCart = session()->get('cart');
        //dd(session()->get('cart'));
        $cart = new Cart($oldCart);
        $categories = Category::all();
        return view('cart', ['products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'categories'=>$categories]);
    }*/

    public function reduceInCart(Request $request, $id):RedirectResponse
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduce($id);

        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return back()->withInput()->with('status', 'cart updated successfully');
    }

    public function removefromCart(Request $request, $id)
    {
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        $request->session()->put('cart',$cart);
        return response()->json();
        /*dd($request->session()->get('cart'));
        return back()->withInput()->with('status', 'cart updated successfully');*/
    }
}
