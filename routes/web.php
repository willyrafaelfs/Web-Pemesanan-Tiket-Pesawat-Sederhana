<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('penerbangan', App\Http\Controllers\PenerbanganController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home_admin', [App\Http\Controllers\HomeAdminController::class, 'index'])->name('home_admin');
Route::get('/about', [App\Http\Controllers\AboutController::class,'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::get('/login_admin', [App\Http\Controllers\Auth\LoginAdminController::class,'index'])->name('login_admin');
Route::get('/create', [App\Http\Controllers\PenerbanganController::class,'create'])->name('create');
Route::post('/create', [App\Http\Controllers\PenerbanganController::class,'create'])->name('create');
Route::get('checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
