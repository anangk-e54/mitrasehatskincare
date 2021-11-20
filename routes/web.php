<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\AuthController;

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

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route ::post('/postlogin',[AuthController::class, 'postlogin']);
Route ::get('/logout',[AuthController::class,'logout']);


Route::get('/',[PromotionsController::class, 'view']);
// Route::view('/products','products');
Route::get('/products',[ProductsController::class, 'view']);
Route::get('/product-detail/{product}',[ProductsController::class, 'show']);
// Route::view('/about','about');
Route::get('/about',[CustomersController::class, 'view']);
Route::get('/customer-detail/{customer}',[CustomersController::class, 'show']);
Route::view('/contact','contact');
Route::view('/product/detail','homepage/productDetail');



Route::middleware('auth')->group(function () {

    Route::get('/product',[ProductsController::class, 'index'])->name('productlist');
    Route::get('/product/create',[ProductsController::class, 'create']);
    Route::post('/product/store',[ProductsController::class, 'store']);
    Route::get('/product/{product}',[ProductsController::class, 'edit'])->name('editproduct');
    Route::post('/product/{product}',[ProductsController::class, 'update']);
    Route::delete('/product/{product}',[ProductsController::class, 'destroy']);
    
    Route::get('/promotion',[PromotionsController::class, 'index'])->name('promotionlist');
    Route::get('/promotion/create',[PromotionsController::class, 'create']);
    Route::post('/promotion/store',[PromotionsController::class, 'store']);
    Route::get('/promotion/{promotion}',[PromotionsController::class, 'edit'])->name('editpromotion');
    Route::post('/promotion/{promotion}',[PromotionsController::class, 'update']);
    Route::delete('/promotion/{promotion}',[PromotionsController::class, 'destroy']);
    
    Route::get('/customer',[CustomersController::class, 'index'])->name('customerlist');
    Route::get('/customer/create',[CustomersController::class, 'create']);
    Route::post('/customer/store',[CustomersController::class, 'store']);
    Route::get('/customer/{customer}',[CustomersController::class, 'edit'])->name('editcustomer');
    Route::post('/customer/{customer}',[CustomersController::class, 'update']);
    Route::delete('/customer/{customer}',[CustomersController::class, 'destroy']);


    Route::view('/contact','/contact');
    
    });
    
    