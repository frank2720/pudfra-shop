<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
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
        $recommendedProducts = Product::whereIn('id', $recentlyViewed)->get();

        Cookie::queue('recently_viewed', json_encode($recentlyViewed), 60 * 24 * 7);
        $json_data = File::get(storage_path('app/public/towns/towns.json'));
        
        $towns = json_decode($json_data);
        $product = Product::with('entity')->find($id);
        $latest = Product::with('entity')
                        ->latest()
                        ->paginate(8);
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);

        if($product != null){
            return view('product-detail', [
                'towns'=>$towns,
                'product'=>$product,
                'latest'=>$latest,
                'cart_products'=>$cart->items,
                'recommendedProducts'=>$recommendedProducts,
                'totalPrice'=>$cart->totalPrice]);
        }else{
            return view('errors.product.unavailable');
        }
    }

    public function products(Request $request)
    {
        $products = match ($request->creteria) {
                'name_asc' => Product::join('product_entities','products.id','=','product_entities.product_id')
                                        ->orderBy('name', 'asc')
                                        ->get(),
                'name_desc'=> Product::join('product_entities','products.id','=','product_entities.product_id')
                                        ->orderBy('name', 'desc')
                                        ->get(),
                'price_asc'=> Product::join('product_entities','products.id','=','product_entities.product_id')
                                        ->orderBy('price', 'asc')
                                        ->get(),
                'price_desc'=> Product::join('product_entities','products.id','=','product_entities.product_id')
                                        ->orderBy('price', 'desc')
                                        ->get(),
                default=> Product::join('product_entities','products.id','=','product_entities.product_id')
                                    ->orderBy('name', 'asc')
                                    ->get(),
        };

        if ($request->ajax()) {
            return response()->json([
                'products' => $products,
            ]);
        }

        $latest = Product::latest()->paginate(8);
        $oldCart = session()->get('cart');
        $json_data = File::get(storage_path('app/public/towns/towns.json'));
        $towns = json_decode($json_data);
        $cart = new Cart($oldCart);

        return view('shop', [
            'towns' => $towns,
            'products'=>$products,
            'latest' => $latest,
            'cart_products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        ]);
    }
}
