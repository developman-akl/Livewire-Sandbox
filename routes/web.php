<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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


Route::redirect('/', '/login');

Auth::routes();

// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::group(['prefix' => '', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::post('orders/parse-csv-import', [OrderController::class, 'parseCsvImport'])->name('orders.parseCsvImport');
    Route::post('orders/process-csv-import', [OrderController::class, 'processCsvImport'])->name('orders.processCsvImport');
    Route::resource('orders', OrderController::class);

    Route::get('products', [ProductController::class, 'index'])->name('products');
// });