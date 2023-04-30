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

//Zona Rack nivel localidad 
Route::post('save-zona','App\Http\Controllers\LayoutController@crearZona');
Route::post('save-rack','App\Http\Controllers\LayoutController@crearRack');
Route::post('save-nivel','App\Http\Controllers\LayoutController@crearNivel');
Route::post('save-localidad','App\Http\Controllers\LayoutController@crearLocalidad');

Route::get('listar-zona','App\Http\Controllers\LayoutController@listarZona');
Route::get('listar-rack','App\Http\Controllers\LayoutController@listarRack');
Route::get('listar-nivel','App\Http\Controllers\LayoutController@listarNivel');
Route::get('listar-localidad','App\Http\Controllers\LayoutController@listarLocalidad');

Route::delete('delete-zona/{id}','App\Http\Controllers\LayoutController@deleteZona');


Route::put('actualizar-zona/{id}','App\Http\Controllers\LayoutController@actualizarZona');





//API ZONAQA
Route::post('save-zonaqa','App\Http\Controllers\LayoutQAController@crearZonaQA');
Route::post('save-rackqa','App\Http\Controllers\LayoutQAController@crearRackQA');
Route::post('save-nivelqa','App\Http\Controllers\LayoutQAController@crearNivelQA');
Route::post('save-localidadqa','App\Http\Controllers\LayoutQAController@crearLocalidadQA');

Route::get('listar-zonaqa','App\Http\Controllers\LayoutQAController@listarZonaQA');
Route::get('listar-rackqa','App\Http\Controllers\LayoutQAController@listarRackQA');
Route::get('listar-nivelqa','App\Http\Controllers\LayoutQAController@listarNivelQA');
Route::get('listar-localidadqa','App\Http\Controllers\LayoutQAController@listarLocalidadQA');

//API LAYOUT (se cambiara)
Route::post('save-layoutqa','App\Http\Controllers\LayoutQAController@saveLayoutqa');
Route::get('listar-layoutqa','App\Http\Controllers\LayoutQAController@listarLayoutqa');
Route::delete('eliminar-layoutqa/{id}','App\Http\Controllers\LayoutQAController@deleteLayoutqa');


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

//API paises
Route::post('save-paises','App\Http\Controllers\PaisController@savePaises');
Route::get('listar-paises','App\Http\Controllers\PaisController@listarPaises');


//api marca
Route::post('save-marca','App\Http\Controllers\MarcaController@saveMarcas');
Route::get('listar-marca','App\Http\Controllers\MarcaController@listarMarcas');

//api marca
Route::post('save-marca','App\Http\Controllers\MarcaController@saveMarcas');
Route::get('listar-marca','App\Http\Controllers\MarcaController@listarMarcas');
//api ubicacion
Route::post('save-ubicacion','App\Http\Controllers\UbicacionController@saveUbicacion');
Route::get('listar-ubicacion','App\Http\Controllers\UbicacionController@listarUbicacion');

//API PROVEEDORES
Route::post('save-proveedor','App\Http\Controllers\ProveedorController@saveProveedores');
Route::get('listar-proveedor','App\Http\Controllers\ProveedorController@listarProveedor');

//API LOCALIDAD ALSE
Route::post('save-localidadAlse','App\Http\Controllers\localidadAlseController@crearLocalidadAlse');
Route::get('listar-localidadAlse','App\Http\Controllers\localidadAlseController@listarLocalidadAlse');
