<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
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

    public function products(Request $request)
    {
        $criteria = $request->input('criteria');
        $products = Product::query();

        switch ($criteria) {
            case 'name_asc':
                $products->with('images')->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $products->with('images')->orderBy('name', 'desc');
                break;
            case 'price_asc':
                $products->with('images')->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $products->with('images')->orderBy('price', 'desc');
                break;
            default:
                $products->with('images')->orderBy('name', 'asc'); // Default sorting
                break;
        }
        $products = $products->get();

        if ($request->ajax()) {
            // If the request is AJAX, return the sorted products as JSON
            return response()->json($products);
        }

        // If the request is not AJAX, return the standard view
        $categories = Category::all();
        $nav_products = Product::with('images')->get();
        $latest = Product::with('images')->latest()->paginate(8);
        $oldCart = session()->get('cart');
        $json_data = File::get(storage_path('app/public/towns/towns.json'));
        $towns = json_decode($json_data);
        $cart = new Cart($oldCart);

        return view('shop', [
            'towns' => $towns,
            'nav_products' => $nav_products,
            'categories' => $categories,
            'products'=>$products,
            'latest' => $latest,
            'cart_products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        ]);
    }
}
