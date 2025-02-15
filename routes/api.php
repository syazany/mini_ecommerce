<?php

use App\Http\Controllers\AddedProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::resource('added-products', AddedProductController::class)
        ->parameters(['added-products' => 'addedProduct']);
    Route::apiResource('orders', OrderController::class);
    Route::get('/user', function(Request $request) {
        return $request->user();
    });
    Route::get('/categories', CategoryController::class);
    Route::get('/brands', BrandController::class);
});
