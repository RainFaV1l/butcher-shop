<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'registerPage')->name('registerPage');
    Route::post('/register', 'register')->name('register');
    Route::get('/login', 'loginPage')->name('loginPage');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::controller(UserController::class)->middleware('auth')->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::post('/profile', 'changePersonalInfo')->name('change');
});

Route::controller(\App\Http\Controllers\CartController::class)->prefix('cart')->name('cart.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/products/{product}', 'store')->name('store');
    Route::delete('/products/{product}', 'destroy')->name('destroy');
    Route::post('/products/{product}/plus', 'plus')->name('plus');
    Route::post('/products/{product}/minus', 'minus')->name('minus');
    Route::post('/', 'checkout')->name('checkout');
});

Route::controller(\App\Http\Controllers\AdminController::class)->middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/products', 'products')->name('products.index');
    Route::post('/products', 'store')->name('products.store');
    Route::get('/products/create', 'create')->name('products.create');
    Route::get('/products/{product}/edit', 'edit')->name('products.edit');
    Route::delete('/products/{product}', 'destroy')->name('products.destroy');
    Route::patch('/products/{product}', 'update')->name('products.update');
    Route::post('/carts/{cart}/accept', 'accept')->name('carts.accept');
});

Route::controller(IndexController::class)->group(function () {
   Route::get('/', 'home')->name('home');
});
