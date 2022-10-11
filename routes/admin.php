<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Livewire\Admin\About;
use App\Http\Livewire\Admin\Auth\Authentication;
use App\Http\Livewire\Admin\Auth\UpdateProfile;
use App\Http\Livewire\Admin\Category;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Product;
use App\Http\Livewire\Admin\Slider;
use App\Http\Livewire\Admin\SubCategory;
use App\Http\Livewire\Admin\Vendor;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/login', Authentication::class)->name('admin.login');
    });
});

Route::middleware(['auth:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
        Route::get('/category', Category::class)->name('admin.category');
        Route::get('/sub/category', SubCategory::class)->name('admin.sub-category');
        Route::get('/vendors', Vendor::class)->name('admin.vendor');
        Route::get('/products', Product::class)->name('admin.product');
        Route::get('/slider', Slider::class)->name('admin.slider');
        Route::get('/update/profile', UpdateProfile::class)->name('admin.update-profile');
        Route::get('/abouts', About::class)->name('admin.about');
        Route::get('/abouts/add/about',[ AboutController::class,'show'])->name('admin.add-about');
        Route::post('/abouts/add/about',[ AboutController::class,'save']);
        Route::get('/abouts/edit/about/{id}', [AboutController::class,'edit'])->name('admin.edit-about');
        Route::post('/abouts/update/about/{id}', [AboutController::class,'update'])->name('admin.update-about');
    });
});
