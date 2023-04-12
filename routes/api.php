<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('save-empresa','App\Http\Controllers\EmpresasController@saveEmpresa');

// Route::get('/listDayBefore','App\Http\Controllers\PedidosController@listDayBefore');
// Route::put('/pedidoEntregado/{id}','App\Http\Controllers\PedidosController@pedidoEntregado');
// Route::put('/pedidoEntregadoNO/{id}','App\Http\Controllers\PedidosController@pedidoEntregadoNO');