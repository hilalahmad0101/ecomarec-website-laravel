<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\User\Auth\AccountDetails;
use App\Http\Livewire\User\Auth\Dashboard;
use App\Http\Livewire\User\Auth\Registration;
use App\Http\Livewire\User\Auth\VerifyOtp;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');


Route::middleware(['not_verify'])->group(function () {
    Route::get('/verify-account', VerifyOtp::class)->name('user.verify-account');
    // Route::get('/resend-otp', [VerifyOtp::class, 'resendOtp'])->name('resend-otp');
});
Route::middleware(['guest'])->group(function () {
    Route::get('/my-account', Registration::class)->name('user.my-account');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('user.dashboard');
        Route::get('/account-details', AccountDetails::class)->name('user.account-details');
    });
});
