<?php

use App\Http\Controllers\MainController;
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
Route::post('/home/check_consultation', [MainController::class,'check_consultation']);

//Отримання даних з url-адрес
//Route::get('card/{id_card}',function ($id_card){
//    return "id: " . $id_card;
//});

