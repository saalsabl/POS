<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Halaman Home
Route::get('/', [HomeController::class, 'index'] );

//Halaman Products
Route::prefix('category') -> group(function(){
    Route::get('/food-beverage', [ProductsController::class, 'foodb']);
    Route::get('/beauty-health', [ProductsController::class, 'beautyyh']);
    Route::get('/home-care', [ProductsController::class, 'homecare']);
    Route::get('/baby-kid', [ProductsController::class, 'babykid']);
});

//Halaman User dengan parameter
Route::get('/user', [UserController::class, 'user']);

//Halaman Penjualan
Route::get('/penjualan', [SalesController::class, 'transaksi']);