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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/analysis', function () {
    return view('analysis');
});


Route::get('/order', 'App\Http\Controllers\CreateOrderController@index');

Route::get('/transactions', 'App\Http\Controllers\TransactionsController@index');
Route::get('/transactionsDisplay', 'App\Http\Controllers\TransactionsController@display');
Route::get('/transactionsDetails/{id}', 'App\Http\Controllers\TransactionsController@show');


Route::get('/items', 'App\Http\Controllers\ItemsController@index');
Route::get('/itemsDisplay', 'App\Http\Controllers\ItemsController@display');
Route::get('/itemsEdit/{id}', 'App\Http\Controllers\ItemsController@show');
Route::post('/items/add', 'App\Http\Controllers\ItemsController@add');
Route::post('/items/edit', 'App\Http\Controllers\ItemsController@edit');
Route::post('/items/delete', 'App\Http\Controllers\ItemsController@delete');



