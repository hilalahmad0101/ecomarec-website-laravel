<?php

use App\Http\Livewire\Vendor\Auth\Authentication;
use Illuminate\Support\Facades\Route;



Route::get('/vendor/account',Authentication::class);
?>