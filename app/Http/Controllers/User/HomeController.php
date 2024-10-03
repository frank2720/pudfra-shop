<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        $categories = Category::with('subcategories')->get();
        $trending_products = Product::with('entity')->inRandomOrder()->paginate(12);
        $bestsales = Product::inRandomOrder()->paginate(8);
        $latest = Product::latest()->paginate(8);

        $json_data = File::get(storage_path('app/public/towns/towns.json'));
        $towns = json_decode($json_data);

        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);


        if ($request->ajax()) {
            $view = view('trend', compact('trending_products'))->render();

            return response()->json(['html' => $view]);
        }

        return view('home',[
            'towns'=>$towns,
            'trending_products'=>$trending_products,
            'bestsales'=>$bestsales,
            'categories'=>$categories,
            'latest'=>$latest,
            'cart_products'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }

    public function about_us()
    {
        $categories = Category::with('subcategories')->get();
        $trending_products = Product::inRandomOrder()->paginate(12);
        $bestsales = Product::inRandomOrder()->paginate(8);
        $latest = Product::latest()->paginate(8);

        $json_data = File::get(storage_path('app/public/towns/towns.json'));
        $towns = json_decode($json_data);

        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);

        return view('about-us',[
            'towns'=>$towns,
            'trending_products'=>$trending_products,
            'bestsales'=>$bestsales,
            'latest'=>$latest,
            'categories'=>$categories,
            'cart_products'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,
        ]);
    }


    public function product_search(Request $request)
    {

        $products = Product::with('entity')->where('name','like', "%$request->search_string%")
                            ->orwhere('description','like', "%$request->search_string%")
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
