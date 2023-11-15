<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show(): View
    {
        /**
         * Gets the products details
         */

         $products = DB::select('SELECT * FROM products');

         return view('welcome', ['products'=>$products]);
    }
}
