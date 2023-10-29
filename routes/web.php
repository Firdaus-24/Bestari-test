<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CustomersController;

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
    return view('home', ['title' => 'Home']);
});
Route::resource('customers', CustomersController::class);
Route::resource('orders', OrdersController::class);
Route::get('send', [OrdersController::class, 'send'])->name('send');
Route::get('/point4', function () {
    return view('point4.index', ['title' => 'Point 4']);
});
