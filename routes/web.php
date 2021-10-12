<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

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
    return view('index');
});

Route::view('/products','products');
Route::view('/about','about');
Route::view('/contact','contact');
Route::view('/product/detail','homepage/productDetail');



// Route::middleware('auth')->group(function () {

    Route::get('/product',[ProductsController::class, 'index'])->name('productlist');
    Route::get('/product/create',[ProductsController::class, 'create']);
    Route::post('/product/store',[ProductsController::class, 'store']);
    Route::get('/product/{product}',[ProductsController::class, 'show'])->name('productshow');
    Route::post('/product/{product}',[ProductsController::class, 'update']);
    Route::delete('/product/{product}',[ProductsController::class, 'destroy']);
    
    
    Route::view('/contact','/contact');
    
    // });
    
    