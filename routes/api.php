<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TownController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\InvoiceController;
use App\Http\Controllers\Api\V1\CustomerController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix'=> 'v1',
    //'namespace'=>'App\Http\Controllers\Api\V1',
    'middleware'=>'auth:sanctum'
], function () {
    Route::apiResource('towns',TownController::class);
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoiceController::class);
    Route::post('invoices/bulk',[InvoiceController::class,'bulkStore']);
});
Route::post('login',[UserController::class,'index']);
