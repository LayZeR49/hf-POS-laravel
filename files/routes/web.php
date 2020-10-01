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

Route::get('/login2', function () {
    return view('login');
});

Route::get('/analysis', function () {
    return view('analysis');
});


Route::get('/order', 'App\Http\Controllers\CreateOrderController@index')->name('order');
Route::get('/orderDisplay', 'App\Http\Controllers\CreateOrderController@display')->name('orderDisplay');
Route::get('/orderDisplay/list', 'App\Http\Controllers\CreateOrderController@list')->name('orderDisplay.list');
Route::post('/order/add', 'App\Http\Controllers\CreateOrderController@add')->name('order.add');
Route::delete('/order/delete/{id}', 'App\Http\Controllers\CreateOrderController@delete')->name('order.delete');
Route::delete('/order/clear', 'App\Http\Controllers\CreateOrderController@clear')->name('order.clear');
Route::post('/order/order', 'App\Http\Controllers\CreateOrderController@order')->name('order.order');

Route::get('/transactions', 'App\Http\Controllers\TransactionsController@index');
Route::get('/transactionsDisplay', 'App\Http\Controllers\TransactionsController@display');
Route::get('/transactionsDetails/{id}', 'App\Http\Controllers\TransactionsController@show');

Route::get('/items', [App\Http\Controllers\ItemsController::class, 'index'])->name('items');
Route::get('/itemsDisplay', 'App\Http\Controllers\ItemsController@display')->name('itemsDisplay');
Route::get('/itemsEdit/{id}', 'App\Http\Controllers\ItemsController@show')->name('itemsEdit');
Route::post('/items/add', 'App\Http\Controllers\ItemsController@add')->name('items.add');
Route::put('/items/edit', 'App\Http\Controllers\ItemsController@edit')->name('items.edit');
Route::delete('/items/delete', 'App\Http\Controllers\ItemsController@delete')->name('items.delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
