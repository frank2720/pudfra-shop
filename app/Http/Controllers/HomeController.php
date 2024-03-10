<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
     //   $this->middleware('auth');
    //}

    public function index(Request $request)
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
}
