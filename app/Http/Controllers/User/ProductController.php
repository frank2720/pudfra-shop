<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Swap\Laravel\Facades\Swap;
use Torann\GeoIP\Facades\GeoIP;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cookie;

class ProductController extends Controller
{
    

    public function product_details($id)
    {

        $recentlyViewed = json_decode(Cookie::get('recently_viewed', '[]'), true);
        if (!in_array($id, $recentlyViewed)) {
            $recentlyViewed[] = $id;
        }
        if (count($recentlyViewed) > 10) {
            array_shift($recentlyViewed);
        }
        $recommendedProducts = Product::whereIn('id', $recentlyViewed)->with('images')->get();

        Cookie::queue('recently_viewed', json_encode($recentlyViewed), 60 * 24 * 7);
        $categories =  Category::all();
        $json_data = File::get(storage_path('app/public/towns/towns.json'));
        
        $towns = json_decode($json_data);
        $product = Product::with('images')->find($id);
        $latest = Product::with('images')
                        ->latest()
                        ->paginate(8);
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);

        return view('product-detail', [
        'towns'=>$towns,
        'product'=>$product,
        'categories'=>$categories,
        'latest'=>$latest,
        'cart_products'=>$cart->items,
        'recommendedProducts'=>$recommendedProducts,
        'totalPrice'=>$cart->totalPrice]);
    }

    public function products(Request $request)
    {
        switch ($request->creteria) {
            case 'name_asc':
                $products = Product::with('images')->orderBy('name', 'asc')->get();
                break;
            case 'name_desc':
                $products = Product::with('images')->orderBy('name', 'desc')->get();
                break;
            case 'price_asc':
                $products = Product::with('images')->orderBy('price', 'asc')->get();
                break;
            case 'price_desc':
                $products = Product::with('images')->orderBy('price', 'desc')->get();
                break;
            default:
                $products = Product::with('images')->orderBy('name', 'asc')->get(); 
                break;
        }

        if ($request->ajax()) {
            return response()->json([
                'products' => $products,
            ]);
        }

        $categories = Category::all();
        $latest = Product::with('images')->latest()->paginate(8);
        $oldCart = session()->get('cart');
        $json_data = File::get(storage_path('app/public/towns/towns.json'));
        $towns = json_decode($json_data);
        $cart = new Cart($oldCart);

        return view('shop', [
            'towns' => $towns,
            'categories' => $categories,
            'products'=>$products,
            'latest' => $latest,
            'cart_products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        ]);
    }
}
