<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SecretController;
use App\Http\Controllers\UserController;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'read']);

Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{id}', [CategoryController::class, 'read']);

//Route::get('/discovery/{category_id?}', function ($category_id = null) {
////    if ($category_id) {
////        return new CategoryResource(Category::findOrFail($category_id));
//////        $products = Category::with('products')->findOrFail($category_id)['products'];
////    } else {
////        return CategoryResource::collection(Category::all());
//        $products = Product::with('images')->get();
//    }
//
//    return response()->json($products);
//});

//Route::get('/products/{category_id?}', function ($category_id = null) {
//    if ($category_id) {
//        $products = Category::with('products')->findOrFail($category_id)['products'];
//    } else {
//        $products = Product::with('images')->get();
//    }
//
//    return response()->json($products);
//});

Route::post('products/create', [ProductController::class, 'store']);
Route::post('products/{id}/update', [ProductController::class, 'update']);
Route::post('products/{id}/delete', [ProductController::class, 'delete']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('user', [UserController::class, 'current']);

    Route::group(['middleware' => 'administrator'], function () {
        Route::get('users', [UserController::class, 'index']);

        Route::post('products/create', [ProductController::class, 'store']);
        Route::post('products/{id}/update', [ProductController::class, 'update']);
        Route::post('products/{id}/delete', [ProductController::class, 'delete']);

        Route::post('categories/create', [CategoryController::class, 'store']);
        Route::post('categories/{id}/update', [CategoryController::class, 'update']);
        Route::post('categories/{id}/delete', [CategoryController::class, 'delete']);
    });
});

Route::get('test', function () {
   return response()->json(\App\Http\Resources\CategoryResource::collection(Category::all()));
});
