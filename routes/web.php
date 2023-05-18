<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('home', HomeController::class);
Route::resource('product', ProductController::class);
Route::resource('auth', CustomAuthController::class);

Route::post('/auth/credentials', [CustomAuthController::class, 'credentials'])->name('credentials');
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');
