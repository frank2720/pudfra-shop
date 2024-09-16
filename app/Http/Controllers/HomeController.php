<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Swap\Laravel\Facades\Swap;
use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        $categories =  Category::all();

        $trending_products = Product::with('images')
                                ->inRandomOrder()
                                ->paginate(12);

        $json_data = File::get(storage_path('app/public/towns/towns.json'));

        $towns = json_decode($json_data);

        $bestsales = Product::with('images')
                        ->inRandomOrder()
                        ->paginate(8);

        $latest = Product::with('images')
                        ->latest()
                        ->paginate(8);

        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);


        if ($request->ajax()) {
            $view = view('trend', compact('trending_products'))->render();

            return response()->json(['html' => $view]);
        }

        return view('home',[
            'towns'=>$towns,
            'categories'=> $categories,
            'trending_products'=>$trending_products,
            'bestsales'=>$bestsales,
            'latest'=>$latest,
            'cart_products'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }

    public function about_us()
    {

        $categories =  Category::all();

        $trending_products = Product::with('images')
                                ->inRandomOrder()
                                ->paginate(12);

        $json_data = File::get(storage_path('app/public/towns/towns.json'));

        $towns = json_decode($json_data);

        $bestsales = Product::with('images')
                        ->inRandomOrder()
                        ->paginate(8);

        $latest = Product::with('images')
                        ->latest()
                        ->paginate(8);

        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);

        return view('about-us',[
            'towns'=>$towns,
            'categories'=> $categories,
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
                                      
        
        return response()->json([
            'products' => $products,
            'message' => 'No products found'
        ]);
    }

    public function markAsRead(){
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }
}
