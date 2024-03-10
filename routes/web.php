<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//home page routes
Route::get('/', [HomeController::class,'index'])->name('welcome');

Route::middleware(['auth','verified'])->group(function () {

      Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
      Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

      Route::group([
            'prefix'=> 'admin',
            'middleware'=>'is_admin',
      ], function() {
            Route::get('dashboard', [ProductController::class, 'index'])->name('admin.interphase');
            /*crud operations on products*/
            Route::resource('products', ProductController::class)
                  ->only(['create','store']);
            /*crud operations on categories*/
            Route::resource('categories', CategoryController::class);
      });
});

Route::group([
      'prefix'=>'payments'
],function(){
      Route::post('/initiatepush',[PaymentController::class,'initiatestk'])->name('stkpush');
      Route::post('/callback',[PaymentController::class,'stkcallback'])->name('stkcallback');
});


Route::get('/shop', [ProductController::class, 'products'])->name('shop');
Route::get('/product/{id}', [ProductController::class, 'product'])->name('product_details');
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/shopping/cart', [ProductController::class, 'getCart'])->name('shopping');
Route::get('/shopping/removeItem/{id}', [CartController::class, 'removefromCart'])->name('removefromCart');
Route::get('/shopping/reduceItem/{id}', [CartController::class, 'reduceInCart'])->name('productReduce');

Route::get('/pagination/paginate-data',[ProductController::class,'home_products']);
Route::get('/pagination/products',[ProductController::class,'products_paginate']);
Route::get('/load-more-data', [ProductController::class,'loadmore'])->name('load.more');

Route::get('/product-details/{id}', [ProductController::class,'quick_view'])->name('product.details');

Route::get('/search',[ProductController::class, 'product_search'])->name('product.search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
