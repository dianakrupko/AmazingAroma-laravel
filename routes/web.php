<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class,'home']);
Route::get('/catalog',[MainController::class,'catalog']);
Route::get('/about', [MainController::class,'about']);;
Route::get('/favorite',[MainController::class,'favorite']);
Route::get('/basket', [MainController::class,'basket']);

//дані з форми
Route::get('/form',[MainController::class,'form']);
Route::post('/home/check_consultation', [MainController::class,'check_consultation']);
//Отримання даних з url-адрес
Route::get('card/{id_card}',[MainController::class,'card']);
Route::get('product/{id}',[ProductController::class,'info_product']);
Route::get('product',[ProductController::class,'getProductjson']);
