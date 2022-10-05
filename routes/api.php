<?php

use App\Http\Controllers\User\Api\AuthenticationController;
use App\Http\Controllers\User\Api\CartController;
use App\Http\Controllers\User\Api\CategoryController;
use App\Http\Controllers\User\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware([''])->group(function () {
Route::prefix('users')->group(function () {
    Route::post('/send/otp', [AuthenticationController::class, 'create']);
    Route::post('/verify/otp', [AuthenticationController::class, 'verifyOtp']);
    Route::post('/login', [AuthenticationController::class, 'login']);
});
// });

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/',[AuthenticationController::class,'getUser']);
        Route::get('/category',[CategoryController::class,'index']);
        Route::get('/products',[ProductController::class,'index']);
        Route::get('/search/products/{value}',[ProductController::class,'searchProduct']);
        Route::get('/category/product/{id}',[ProductController::class,'getCategoryProduct']);
        Route::get('/products/details/{id}',[ProductController::class,'productDetail']);
        Route::post('/add/cart/{pro_id}/owner/{owner_id}',[CartController::class,'index']);
        Route::get('/total/cart',[CartController::class,'totalCount']);
        Route::put('/update/cart/{id}',[CartController::class,'updateCart']);
        Route::delete('/delete/cart/{id}',[CartController::class,'deleteCart']);
    });
});