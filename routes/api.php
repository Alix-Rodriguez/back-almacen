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

//API EMPRESA
Route::post('save-empresa','App\Http\Controllers\EmpresasController@saveEmpresa');
Route::get('listar-empresa','App\Http\Controllers\EmpresasController@listarEmpresas');
Route::delete('eliminar-empresa/{id}','App\Http\Controllers\EmpresasController@deleteEmpresa');
Route::get('empresa-byId/{id}','App\Http\Controllers\EmpresasController@getEmpresaById');
Route::put('actualizar-empresa/{id}','App\Http\Controllers\EmpresasController@actualizarEmpresa');

//API Almacen
Route::get('listar-almacen','App\Http\Controllers\AlmacenController@listarAlmacenes');
Route::post('save-almacen','App\Http\Controllers\AlmacenController@guardarAlmacen');


//API Delegaciones
Route::get('listar-delegaciones','App\Http\Controllers\DelegacionController@listDelegacion');
Route::post('save-delegaciones','App\Http\Controllers\DelegacionController@guardarAllDelegaciones');


Route::post('save-colonias','App\Http\Controllers\ColoniasController@guardarAllColonias');
Route::get('listar-colonia/{id}','App\Http\Controllers\ColoniasController@coloniaById');

//Zona
Route::post('save-zona','App\Http\Controllers\LayoutController@crearZona');
Route::post('save-rack','App\Http\Controllers\LayoutController@crearRack');
Route::post('save-nivel','App\Http\Controllers\LayoutController@crearNivel');
Route::post('save-localidad','App\Http\Controllers\LayoutController@crearLocalidad');

Route::get('listar-zona','App\Http\Controllers\LayoutController@listarZona');
Route::get('listar-rack','App\Http\Controllers\LayoutController@listarRack');
Route::get('listar-nivel','App\Http\Controllers\LayoutController@listarNivel');
Route::get('listar-localidad','App\Http\Controllers\LayoutController@listarLocalidad');

//API CLIENTES
Route::post('save-cliente','App\Http\Controllers\ClientesController@saveCliente');
Route::get('listar-cliente','App\Http\Controllers\ClientesController@listarCliente');
Route::delete('eliminar-cliente/{id}','App\Http\Controllers\ClientesController@deleteCliente');
Route::put('/actualizar-cliente/{id}','App\Http\Controllers\ClientesController@actualizarCliente');
Route::get('cliente-byId/{id}','App\Http\Controllers\ClientesController@getClienteById');

//layout
Route::post('save-layout','App\Http\Controllers\LayoutController@saveLayout');
Route::get('listar-layout','App\Http\Controllers\LayoutController@listarLayout');
Route::delete('eliminar-layout/{id}','App\Http\Controllers\LayoutController@deleteLayout');
Route::put('/actualizar-layout/{id}','App\Http\Controllers\layoutController@actualizarLayout');