<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function products(): View
    {
        /**
         * Get the products
         */
        $products = DB::table('products')->get();
        return view('shop',['products'=>$products]);
    }

    public function recent_products(): View
    {
        /**
         * Gets the recent added products details
         */
         $recent_products = DB::table('products')
                    ->latest()
                    ->limit(8)
                    ->get();
         return view('welcome', ['recent_products'=>$recent_products]);
    }
}
