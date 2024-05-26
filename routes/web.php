<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;


Route::get('/', [HomeController::class,'index'])->name('welcome');

Route::middleware(['auth','verified'])->group(function () {

      Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
      Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

      Route::get('/shopping-checkout', [CartController::class, 'checkout'])->name('checkout');

      Route::group([
            'prefix'=> 'admin',
            'middleware'=>'is_admin',
            'as'=>'admin.'
      ], function() {
            Route::get('home', [AdminProductController::class, 'index'])->name('dashboard');
            Route::get('products', [AdminProductController::class, 'products'])->name('products.list');
            Route::get('edit/{product}', [AdminProductController::class, 'edit'])->name('products.edit');
            Route::put('update/{id}', [AdminProductController::class, 'update'])->name('products.update');
            Route::get('delete/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');
            Route::resource('products', AdminProductController::class)
                  ->only(['store']);
      });
});

Route::group([
      'prefix'=>'payments'
],function(){
      Route::post('/initiatepush',[PaymentController::class,'initiatestk'])->name('stkpush');
      Route::post('/callback',[PaymentController::class,'stkcallback'])->name('stkcallback');
});


Route::get('/shop', [UserProductController::class, 'products'])->name('shop');
Route::get('/product/{id}', [UserProductController::class, 'product'])->name('product_details');
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/shopping-cart', [CartController::class, 'getCart'])->name('shopping');
Route::get('/shopping/removeItem/{id}', [CartController::class, 'removefromCart'])->name('removefromCart');
Route::get('/shopping/reduceItem/{id}', [CartController::class, 'reduceInCart'])->name('productReduce');

Route::get('/pagination/paginate-products',[AdminProductController::class,'index']);
Route::get('/pagination/products',[UserProductController::class,'products_paginate']);
Route::get('/load-more-data', [UserProductController::class,'loadmore'])->name('load.more');

Route::get('/product-details_{id}', [UserProductController::class,'product_details'])->name('product.details');

Route::get('/search',[HomeController::class, 'product_search'])->name('product.search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
