<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;


Route::get('/', [HomeController::class,'index'])->name('welcome');

Route::middleware(['auth','verified'])->group(function () {

      Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
      Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

      Route::group([
            'prefix'=> 'admin',
            'middleware'=>'is_admin',
      ], function() {
            Route::get('home', [ProductController::class, 'index'])->name('admin.home');
            Route::get('edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
            Route::put('update/{id}', [ProductController::class, 'update'])->name('products.update');
            Route::get('delete/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
            Route::resource('products', ProductController::class)
                  ->only(['store']);
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

Route::get('/pagination/paginate-products',[ProductController::class,'index']);
Route::get('/pagination/products',[ProductController::class,'products_paginate']);
Route::get('/load-more-data', [ProductController::class,'loadmore'])->name('load.more');

Route::get('/product-details/{id}', [ProductController::class,'quick_view'])->name('product.details');

Route::get('/search',[ProductController::class, 'product_search'])->name('product.search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
