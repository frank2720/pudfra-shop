<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    
    public function index(Request $request)
    {
        $nav_products = Product::with('images')->get();

        $trending_products = Product::with('images')
                                ->latest()
                                ->paginate(8);

        $json_data = File::get(storage_path('app/public/towns/towns.json'));

        $towns = json_decode($json_data);

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
            'towns'=>$towns,
            'nav_products'=>$nav_products,
            'trending_products'=>$trending_products,
            'bestsales'=>$bestsales,
            'latest'=>$latest,
            'cart_products'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }

    public function product_search(Request $request)
    {
        $products = Product::with('images')
                ->where('name','like', '%'.$request->search_string.'%')
                ->orwhere('description','like', '%'.$request->search_string.'%')
                ->get();
        if (count($products) >=1) {
            return response()->json($products);
        }
    }
}
