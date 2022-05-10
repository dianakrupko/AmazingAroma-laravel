<?php

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
    return view('home');
});
Route::get('/catalog',function (){
    return view('catalog');
});
Route::get('/about', function (){
    return view('about');
});
Route::get('/favorite', function (){
    return view('favorite');
});
Route::get('/basket', function (){
    return view('basket');
});
//Отримання даних з url-адрес
Route::get('card/{id_card}',function ($id_card){
    return "id: " . $id_card;
});

