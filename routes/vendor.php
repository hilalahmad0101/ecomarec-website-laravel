<?php

use App\Http\Livewire\Vendor\Auth\Authentication;
use App\Http\Livewire\Vendor\Auth\Dashboard;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest:vendor'])->group(function () {
    Route::get('/vendors/account', Authentication::class)->name('vendor.auth');
});

Route::middleware(['auth:vendor'])->group(function () {
    Route::prefix('vendors')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('vendor.dashboard');
    });
});
