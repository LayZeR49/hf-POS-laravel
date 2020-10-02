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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/analysis', [App\Http\Controllers\AnalysisController::class, 'index'])->name('analysis');


Route::get('/order', [App\Http\Controllers\CreateOrderController::class, 'index'])->name('order');
Route::get('/orderDisplay', [App\Http\Controllers\CreateOrderController::class, 'display'])->name('orderDisplay');
Route::get('/orderDisplay/list', [App\Http\Controllers\CreateOrderController::class, 'list'])->name('orderDisplay.list');
Route::post('/order/add', [App\Http\Controllers\CreateOrderController::class, 'add'])->name('order.add');
Route::delete('/order/delete/{id}', [App\Http\Controllers\CreateOrderController::class, 'delete'])->name('order.delete');
Route::delete('/order/clear', [App\Http\Controllers\CreateOrderController::class, 'clear'])->name('order.clear');
Route::post('/order/order', [App\Http\Controllers\CreateOrderController::class, 'order'])->name('order.order');

Route::get('/transactions', [App\Http\Controllers\TransactionsController::class, 'index'])->name('transactions');
Route::get('/transactionsDisplay', [App\Http\Controllers\TransactionsController::class, 'display'])->name('transactionsDisplay');
Route::get('/transactionsDetails/{id}', [App\Http\Controllers\TransactionsController::class, 'show'])->name('transactions.show');

Route::get('/items', [App\Http\Controllers\ItemsController::class, 'index'])->name('items');
Route::get('/itemsDisplay', [App\Http\Controllers\ItemsController::class, 'display'])->name('itemsDisplay');
Route::get('/itemsEdit/{id}', [App\Http\Controllers\ItemsController::class, 'show'])->name('itemsEdit');
Route::post('/items/add', [App\Http\Controllers\ItemsController::class, 'add'])->name('items.add');
Route::put('/items/edit', [App\Http\Controllers\ItemsController::class, 'edit'])->name('items.edit');
Route::delete('/items/delete', [App\Http\Controllers\ItemsController::class, 'delete'])->name('items.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
