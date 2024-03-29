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
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('main', function () {
    return view('main');
});

Route::get('product', 'App\Http\Controllers\ProductController@data');

Route::get('order', 'App\Http\Controllers\OrderController@data');

Route::get('history', 'App\Http\Controllers\HistoryController@data');

Route::get('/insert_product', function () {
    return view('insert_product');
});


