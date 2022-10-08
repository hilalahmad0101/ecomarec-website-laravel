<?php

use App\Http\Livewire\CategoryProduct;
use App\Http\Livewire\Home;
use App\Http\Livewire\Product;
use App\Http\Livewire\ProductDetails;
use App\Http\Livewire\User\Auth\AccountDetails;
use App\Http\Livewire\User\Auth\Addresses;
use App\Http\Livewire\User\Auth\BillingAddress;
use App\Http\Livewire\User\Auth\Cart;
use App\Http\Livewire\User\Auth\ChangePassword;
use App\Http\Livewire\User\Auth\Dashboard;
use App\Http\Livewire\User\Auth\ForgetPassword;
use App\Http\Livewire\User\Auth\Order;
use App\Http\Livewire\User\Auth\Registration;
use App\Http\Livewire\User\Auth\ShippingAddress;
use App\Http\Livewire\User\Auth\ThankYou;
use App\Http\Livewire\User\Auth\VerifyOtp;
use App\Http\Livewire\User\Auth\WishList;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/product',Product::class)->name('product');
Route::get('/category/product/{slug}',CategoryProduct::class)->name('category-product');
Route::get('/product/details/{id}',ProductDetails::class)->name('product-detail');
Route::get('/user/cart/count',[ProductDetails::class,'showTotalCount']);
Route::get('/user/wishlist/count',[Home::class,'getTotalWishlistCount']);
Route::get('/forget/password',ForgetPassword::class)->name('user.forget-password');
Route::middleware(['not_verify'])->group(function () {
    Route::get('/verify-account', VerifyOtp::class)->name('user.verify-account');
    // Route::get('/resend-otp', [VerifyOtp::class, 'resendOtp'])->name('resend-otp');
});
Route::middleware(['guest'])->group(function () {
    Route::get('/my-account', Registration::class)->name('user.my-account');
    Route::get('/signup/google',[Registration::class,'googleSignup'])->name('user.google-signup');
    Route::get('/callback',[Registration::class,'googleSignupCallback']);
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('user.dashboard');
        Route::get('/account-details', AccountDetails::class)->name('user.account-details');
        Route::get('/addresses', Addresses::class)->name('user.addresses');
        Route::get('/billing-address', BillingAddress::class)->name('user.billing-address');
        Route::get('/shipping-address', ShippingAddress::class)->name('user.shipping-address');
        Route::get('/carts', Cart::class)->name('user.carts');
        Route::get('/order', Order::class)->name('user.order');
        Route::get('/change/password', ChangePassword::class)->name('user.change-password');
        Route::get('/thankyou',ThankYou::class)->name('user.thankyou');
        Route::get('/wishlist',WishList::class)->name('user.wishlist');
    });
});
require('vendor.php');
require('admin.php');