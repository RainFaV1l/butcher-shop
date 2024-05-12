<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::controller(IndexController::class)->group(function () {
   Route::get('/', 'home')->name('home');
   Route::get('/profile', 'profile')->name('profile');
   Route::get('/cart', 'cart')->name('cart');
   Route::get('/login', 'login')->name('login');
   Route::get('/reg', 'reg')->name('reg');
   Route::get('/admin', 'admin')->name('admin');
   Route::get('/admin/tovars', 'admin_tovars')->name('admin_tovars');
   Route::get('/add', 'add')->name('add');
   Route::get('/edit', 'edit')->name('edit');
});
