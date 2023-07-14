<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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
    return view('product');
})->name('main');
// Route::get('/order', function () {
//     return view('order');
// })->name('order');

Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::post('/create_data', [OrderController::class, 'create_data'])->name('create-data');
Route::post('/update_data', [OrderController::class, 'update_data'])->name('update-data');
Route::post('/delete_data', [OrderController::class, 'delete_data'])->name('delete-data');
