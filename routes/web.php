<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [MainController::class,'home'])->name('home');
Route::get('/catalog',[MainController::class,'catalog'])->name('catalog');
Route::get('/about', [MainController::class,'about'])->name('about');
Route::get('/favorite',[MainController::class,'favorite'])->name('favorite');
Route::get('/basket', [MainController::class,'basket'])->name('basket');

//дані з форми
Route::get('/form',[MainController::class,'form']);
Route::post('/home/check_consultation', [MainController::class,'check_consultation']);
//Отримання даних з url-адрес
//Route::get('card/{id_card}',[MainController::class,'card']);
Route::get('product/{id}',[ProductController::class,'info_product']);
Route::get('product',[ProductController::class,'getProductjson']);

Auth::routes();

//Route::get('/log',[HomeController::class, 'log'])->name('log');
Route::get('/user/{id}', [HomeController::class, 'index'])->name('auth');



Route::get('/photos',[PhotoController::class,'getAllPhotos']);

Route::get('card/{id}',[ProductController::class,'getData'])->name('product');
Route::get('card/{id}/orders',[ProductController::class,'getOrders'])->name('exampleOrders');

Route::get('/userOrders/{id}',[UserController::class,'getOrders']);
Route::get('/user/{id}/orders',[UserController::class,'getData'])->name('myOrders');

Route::get('orders/{id}',[OrderController::class,'getProducts'])->name('orderDetail');
Route::get('/productOrder/{id}',[ProductController::class,'getOrders']);
