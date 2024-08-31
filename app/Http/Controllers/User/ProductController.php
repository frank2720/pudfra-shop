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
        $location = GeoIP::getLocation(env('IP_ADDRESS'));
        $currency = $location->currency;
        $rate = Swap::latest('EUR/'.$currency['code']);
        $currencyExchangeRate = $rate->getValue();

        $recentlyViewed = json_decode(Cookie::get('recently_viewed', '[]'), true);

        // Add the product ID to the array
        if (!in_array($id, $recentlyViewed)) {
            $recentlyViewed[] = $id;
        }

        // Limit the number of stored products, for example, to the last 10 viewed
        if (count($recentlyViewed) > 10) {
            array_shift($recentlyViewed);
        }

        // Store the updated array back in the cookie
        Cookie::queue('recently_viewed', json_encode($recentlyViewed), 60 * 24 * 7); // Cookie valid for 7 days


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
        'currencyExchangeRate'=>$currencyExchangeRate,
        'currency'=>$currency["symbol"],
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
        $location = GeoIP::getLocation(env('IP_ADDRESS'));
        $currency = $location->currency;
        $rate = Swap::latest('EUR/'.$currency['code']);
        $currencyCode = $currency['symbol'];
        $currencyExchangeRate = $rate->getValue();
        
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
                $products = Product::with('images')->orderBy('name', 'asc')->get(); // Default sorting
                break;
        }

        if ($request->ajax()) {
            // If the request is AJAX, return the sorted products as JSON
            return response()->json([
                'products' => $products,
                'currencyCode' => $currencyCode,
                'exchangeRate' => $currencyExchangeRate
            ]);
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
            'currencyExchangeRate'=>$currencyExchangeRate,
            'currency'=>$currency["symbol"],
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
