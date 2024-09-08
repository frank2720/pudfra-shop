<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

Auth::routes();

Route::get('/', [HomeController::class,'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us',[HomeController::class,'about_us'])->name('about-us');

Route::middleware('auth')->group(function () {

      Route::get('email/verify',[VerificationController::class,'show'])->name('verification.notice');
      Route::get('/email/verify/{id}/{hash}',[VerificationController::class,'verify'])->name('verification.verify');
      Route::post('/email/verification-notification',[VerificationController::class,'resend'])->name('verification.resend');
      
      Route::get('/mark-as-read',[HomeController::class,'markAsRead'])->name('mark-as-read');


      Route::middleware('verified')->group(function () {
            Route::get('/profile', [ProfileController::class, 'profile'])->name('profile.profile');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

            Route::get('/shopping-cart', [CartController::class, 'getCart'])->name('shopping');

            Route::group([
                  'prefix'=> 'admin',
                  'middleware'=>'is_admin',
                  'as'=>'admin.'
            ], function() {
                  Route::get('home', [AdminProductController::class, 'index'])->name('dashboard');
                  Route::get('products', [AdminProductController::class, 'products'])->name('products.list');
                  Route::get('categories', [AdminProductController::class, 'categories'])->name('category.list');
                  Route::get('edit/{product}', [AdminProductController::class, 'edit'])->name('products.edit');
                  Route::patch('update/{id}', [AdminProductController::class, 'update'])->name('products.update');
                  Route::get('delete/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');

                  Route::get('edit_category/{category}', [AdminProductController::class, 'edit_category'])->name('category.edit');
                  Route::patch('update_category/{id}', [AdminProductController::class, 'update_category'])->name('category.update');
                  Route::get('delete_category/{category}', [AdminProductController::class, 'destroy_category'])->name('category.destroy');

                  Route::post('products',[AdminProductController::class,'store'])->name('products.store');
                  Route::post('add/images/{id}',[AdminProductController::class,'moreImages'])->name('add.images');
                  Route::get('image/delete/{id}', [AdminProductController::class,'imgDelete'])->name('image.delete');
            });
      });
});

Route::group([
      'prefix'=>'payments'
],function(){
      Route::post('/initiatepush',[PaymentController::class,'initiatestk'])->name('stkpush');
      Route::post('/maanarPayCalls',[PaymentController::class,'stkcallback'])->name('stkcallback');
});


Route::get('/shop', [UserProductController::class, 'products'])->name('shop');
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/shopping/removeItem/{id}', [CartController::class, 'removefromCart'])->name('removefromCart');
Route::get('/shopping/reduceItem/{id}', [CartController::class, 'reduceInCart'])->name('productReduce');
Route::get('/shopping/increaseQty/{id}', [CartController::class, 'increaseQty'])->name('increaseQty');
Route::get('/shopping/reduceQty/{id}', [CartController::class, 'reduceQty'])->name('reduceQty');
Route::get('/shopping/removeProduct/{id}', [CartController::class, 'removeProduct'])->name('removeProduct');

Route::get('/pagination/paginate-products',[AdminProductController::class,'index']);

Route::get('/product-details_{id}', [UserProductController::class,'product_details'])->name('product.details');

Route::get('/search',[HomeController::class, 'product_search'])->name('product.search');
