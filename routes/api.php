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
Route::post('save-almacen','App\Http\Controllers\AlmacenController@guardarAlmacen');
Route::get('listar-almacen','App\Http\Controllers\AlmacenController@listarAlmacenes');
Route::delete('eliminar-almacen/{id}','App\Http\Controllers\AlmacenController@eliminarAlmacen');
Route::put('actualizar-almacen/{id}','App\Http\Controllers\AlmacenController@updateAlmacen');


//API Delegaciones
Route::get('listar-delegaciones','App\Http\Controllers\DelegacionController@listDelegacion');
Route::post('save-delegaciones','App\Http\Controllers\DelegacionController@guardarAllDelegaciones');


Route::post('save-colonias','App\Http\Controllers\ColoniasController@guardarAllColonias');
Route::get('listar-colonia/{id}','App\Http\Controllers\ColoniasController@coloniaById');



//API CLIENTES
Route::post('save-cliente','App\Http\Controllers\ClientesController@saveCliente');
Route::get('listar-cliente','App\Http\Controllers\ClientesController@listarCliente');
Route::delete('eliminar-cliente/{id}','App\Http\Controllers\ClientesController@deleteCliente');
Route::put('/actualizar-cliente/{id}','App\Http\Controllers\ClientesController@actualizarCliente');
Route::get('cliente-byId/{id}','App\Http\Controllers\ClientesController@getClienteById');



//API paises
Route::post('save-paises','App\Http\Controllers\PaisController@savePaises');
Route::get('listar-paises','App\Http\Controllers\PaisController@listarPaises');



//API Remitente
Route::post('save-remitente','App\Http\Controllers\RemitenteController@saveRemitente');
Route::get('listar-remitente','App\Http\Controllers\RemitenteController@listarRemitente');
Route::put('/actualizar-remitente/{id}','App\Http\Controllers\RemitenteController@actualizarRemitente');
Route::delete('delete-remitente/{id}', 'App\Http\Controllers\RemitenteController@deleteRemitente');



//Registro y login de usuario


Route::group( ['middleware' => 'api', 'prefix'=>'auth'], function($router){
    //rutas
    Route::post('registro-usuario','App\Http\Controllers\AuthController@register');
    Route::post('login-usuario','App\Http\Controllers\AuthController@login');
    Route::get('profile-usuario','App\Http\Controllers\AuthController@profile');
    Route::get('logout-usuario','App\Http\Controllers\AuthController@logout');
});