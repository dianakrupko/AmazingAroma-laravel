<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\FavoriteController;
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
Route::get(('/'), [MainController::class,'home'])->name('home');
Route::get(('/home'), [MainController::class,'home'])->name('home');
Route::get('/catalog/{id}',[ProductController::class,'catalog'])->name('catalog');
Route::get('/about', [MainController::class,'about'])->name('about');
Route::get('/favorite',[FavoriteController::class,'favorite'])->name('favorite');
Route::get('/basket', [BasketController::class,'basket'])->name('basket');
Route::get('card/{id}',[ProductController::class,'getData'])->name('product');
Route::post('/catalog/more',[ProductController::class,'getMoreProduct'])->name('moreProduct');
Route::get('/certificate', [ProductController::class,'getCertificate'])->name('certificate');
Route::post('/home/check_consultation', [HomeController::class,'check_consultation'])->name('check_consultation');

Auth::routes();
Route::get('/user', [HomeController::class, 'index'])->name('auth');
//Route::post('/u',[HomeController::class, 'userPage'])->name('userPage');

Route::get('/user/{id}/orders',[BasketController::class,'myOrders'])->name('myOrders');
Route::get('orders/{id}',[BasketController::class,'orderDetail'])->name('orderDetail');

Route::post('/favorite/add/{id}',[FavoriteController::class,'favoriteAdd'])->name('favoriteAdd');
Route::post('/favorite/remove/{id}',[FavoriteController::class,'favoriteRemove'])->name('favoriteRemove');
Route::post('/favorite/delete/{id}',[FavoriteController::class,'deleteProduct'])->name('deleteProduct');

Route::post('/basket/add/{id}',[BasketController::class,'basketAdd'])->name('basketAdd');
Route::post('/basket/sub/{id}',[BasketController::class,'basketSub'])->name('basketSub');
Route::post('/basket/remove/{id}',[BasketController::class,'basketRemove'])->name('basketRemove');
Route::post('/order/{id}',[BasketController::class,'check_order'])->name('orderDone');





