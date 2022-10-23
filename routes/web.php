<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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
    return view('front');
});
// Route::get('/', function () {
//     return view('admin.dashboard');
// });
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

Route::resource('admin',AdminController::class);
Route::resource('product',ProductController::class);
Route::resource('category', CategoryController::class);

Route::resource('login',LoginController::class);



Route::resource('register',RegisterController::class);