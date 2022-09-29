<?php

use App\Http\Livewire\Vendor\Auth\Authentication;
use App\Http\Livewire\Vendor\Auth\Dashboard;
use App\Http\Livewire\Vendor\Auth\Login;
use App\Http\Livewire\Vendor\Product;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest:vendor'])->group(function () {
    Route::prefix('vendors')->group(function () {
        Route::get('/account', Authentication::class)->name('vendor.auth');
        Route::get('/login', Login::class)->name('vendor.login');
    });
});

Route::middleware(['auth:vendor'])->group(function () {
    Route::prefix('vendors')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('vendor.dashboard');
        Route::get('/products', Product::class)->name('vendor.products');
    });
});
