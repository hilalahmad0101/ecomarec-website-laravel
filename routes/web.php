<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\User\Auth\Registration;
use App\Http\Livewire\User\Auth\VerifyOtp;
use Illuminate\Support\Facades\Route;


Route::get('/',Home::class)->name('home');
Route::get('/my-account',Registration::class)->name('user.my-account'); 
Route::get('/verify-account',VerifyOtp::class)->name('user.verify-account');
Route::get('/resend-otp',[VerifyOtp::class,'resendOtp'])->name('resend-otp');
