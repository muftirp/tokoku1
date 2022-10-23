<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CategoryApiController;
use App\Http\Controllers\API\ProductApiController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
// Route::apiResource('register',AuthController::class);


Route::middleware('auth:sanctum')->group(function(){
    // Route::post('register', 'register');
    // Route::post('login', 'login');
    Route::apiResource('category', CategoryApiController::class);
    Route::apiResource('product', ProductApiController::class);
    // Route::get('/category/{id}', function ($id) {
    //     return new CategoryController(Category::findOrFail($id));
    // });
});




// Route::controller(RegisterController::class)->group(function(){
//     // Route::post('register', 'register');
//     // Route::post('login', 'login');
// });