<?php

use App\Http\Controllers\User\Api\AuthenticationController;
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
    });
});