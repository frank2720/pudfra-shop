<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [ProductController::class,'recent_products'])->name('welcome');
Route::get('/shop', [ProductController::class, 'products'])->name('shop');
Route::get('/product/{id}', [ProductController::class, 'product'])->name('product_details');
Route::post('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');
Route::get('/shopping/cart', [ProductController::class, 'getCart'])->name('shopping');
Route::get('/shopping/removeItem/{id}', [ProductController::class, 'removefromCart'])->name('removefromCart');
Route::get('/shopping/reduceItem/{id}', [ProductController::class, 'reduceInCart'])->name('productReduce');

require __DIR__.'/auth.php';
