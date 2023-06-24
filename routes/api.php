<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/list', [ProductAPIController::class, 'list_data']);
Route::get('/detail', [ProductAPIController::class, 'detail_data']);
Route::post('/create', [ProductAPIController::class, 'create_data']);
Route::put('/update', [ProductAPIController::class, 'update_data']);
Route::delete('/delete', [ProductAPIController::class, 'delete_data']);