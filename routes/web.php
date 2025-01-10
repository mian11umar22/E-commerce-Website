<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\AuthMiddleware;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/email',[EmailController::class,'email'])->name('email');
Route::get('shop',[ShopController::class,'shop'])->name('shop');
Route::get('shop/{id}',[ShopController::class,'SingleProduct'])->name('singleProduct');
Route::post('addtocart/{id}',[ShopController::class, 'AddToCart'])->name('addtocart');
Route::get('cart',[CartController::class, 'cart'])->name('cart');
Route::get('remove/{id}',[CartController::class, 'remove'])->name('remove');
Route::get('flush',[ShopController::class, 'flush']);
Route::post('UpdateQuantity/{id}/{action}',[CartController::class, 'UpdateQuantity'])->name('update');
Route::get('checkout',[CheckoutController::class, 'index'])->name('checkout');
Route::post('/store', [CheckoutController::class, 'Adddata'])->name('store');
Route::get('/Signup',[UserController::class, 'Signup'])->name('Signup');
Route::post('/Signup',[UserController::class, 'store'])->name('store');
Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('login',[LoginController::class, 'LoginCheck'])->name('login.check');
Route::resource('Products', ProductController::class)->middleware('Auth:Admin');
Route::get('logout',[LoginController::class ,'logout'])->name('logout');
Route::resource('users',AccountController::class)->middleware('Auth:Admin');
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('Auth:Admin');
Route::get('search',[SearchController::class ,'index'])->name('search');
