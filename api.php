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
Route::get('listar-empresa','App\Http\Controllers\EmpresasController@listarEmpresas');
Route::delete('eliminar-empresa/{id}','App\Http\Controllers\EmpresasController@deleteEmpresa');
Route::get('empresa-byId/{id}','App\Http\Controllers\EmpresasController@getEmpresaById');
Route::put('/actualizar-empresa/{id}','App\Http\Controllers\EmpresasController@actualizarEmpresa');


Route::post('save-cliente','App\Http\Controllers\ClientesController@saveCliente');
Route::get('listar-cliente','App\Http\Controllers\ClientesController@listarCliente');
Route::delete('eliminar-cliente/{id}','App\Http\Controllers\ClientesController@deleteCliente');
Route::put('/actualizar-cliente/{id}','App\Http\Controllers\ClientesController@actualizarCliente');
Route::get('cliente-byId/{id}','App\Http\Controllers\ClientesController@getClienteById');
