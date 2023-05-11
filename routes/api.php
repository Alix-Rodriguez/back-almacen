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
Route::delete('delete-rack/{id}','App\Http\Controllers\LayoutController@deleteRack');
Route::delete('delete-nivel/{id}','App\Http\Controllers\LayoutController@deleteNivel');
Route::delete('delete-localidad/{id}','App\Http\Controllers\LayoutController@deleteLocalidad');

Route::put('actualizar-zona/{id}','App\Http\Controllers\LayoutController@actualizarZona');
Route::put('actualizar-rack/{id}','App\Http\Controllers\LayoutController@actualizarRack');
Route::put('actualizar-nivel/{id}','App\Http\Controllers\LayoutController@actualizarNIvel');
Route::put('actualizar-localidad/{id}','App\Http\Controllers\LayoutController@actualizarLocalidad');


//API ZONAQA
Route::post('save-zonaqa','App\Http\Controllers\LayoutQAController@crearZonaQA');
Route::post('save-rackqa','App\Http\Controllers\LayoutQAController@crearRackQA');
Route::post('save-nivelqa','App\Http\Controllers\LayoutQAController@crearNivelQA');
Route::post('save-localidadqa','App\Http\Controllers\LayoutQAController@crearLocalidadQA');

Route::get('listar-zonaqa','App\Http\Controllers\LayoutQAController@listarZonaQA');
Route::get('listar-rackqa','App\Http\Controllers\LayoutQAController@listarRackQA');
Route::get('listar-nivelqa','App\Http\Controllers\LayoutQAController@listarNivelQA');
Route::get('listar-localidadqa','App\Http\Controllers\LayoutQAController@listarLocalidadQA');

//API LAYOUTQA
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
Route::delete('delete-marca/{id}', 'App\Http\Controllers\MarcaController@deleteMarca');
Route::put('/actualizar-marca/{id}','App\Http\Controllers\MarcaController@actualizarMarca');


//api ubicacion
Route::post('save-ubicacion','App\Http\Controllers\UbicacionController@saveUbicacion');
Route::get('listar-ubicacion','App\Http\Controllers\UbicacionController@listarUbicacion');

//API PROVEEDORES
Route::post('save-proveedor','App\Http\Controllers\ProveedorController@saveProveedores');
Route::get('listar-proveedor','App\Http\Controllers\ProveedorController@listarProveedor');
Route::delete('delete-proveedor/{id}', 'App\Http\Controllers\ProveedorController@deleteProveedor');
Route::put('/actualizar-proveedor/{id}','App\Http\Controllers\ProveedorController@actualizarProveedor');


//API LOCALIDAD ALSE
Route::post('save-localidadAlse','App\Http\Controllers\localidadAlseController@crearLocalidadAlse');
Route::get('listar-localidadAlse','App\Http\Controllers\localidadAlseController@listarLocalidadAlse');

//API linea producto
Route::post('save-lineaproducto','App\Http\Controllers\lineaProductoController@saveLineaProducto');
Route::get('listar-lineaproducto','App\Http\Controllers\lineaProductoController@listarLineaProducto');
Route::delete('delete-lineaproducto/{id}', 'App\Http\Controllers\lineaProductoController@deleteLineaProducto');
Route::put('/actualizar-lineaproducto/{id}','App\Http\Controllers\lineaProductoController@actualizarLineaProducto');

//API Unidad de carga
Route::post('save-unidadcarga','App\Http\Controllers\UnidadcargaController@saveUnidadcarga');
Route::get('listar-unidadcarga','App\Http\Controllers\UnidadcargaController@listarUnidadcarga');
Route::delete('delete-unidadcarga/{id}', 'App\Http\Controllers\UnidadcargaController@deleteUnidadcarga');
Route::put('/actualizar-unidadcarga/{id}','App\Http\Controllers\UnidadcargaController@actualizarUnidadcarga');

//API configuracion lote
Route::post('save-configlote','App\Http\Controllers\ConfigloteController@saveConfiglote');
Route::get('listar-configlote','App\Http\Controllers\ConfigloteController@listarConfiglote');
Route::delete('delete-configlote/{id}', 'App\Http\Controllers\ConfigloteController@deleteConfiglote');
Route::put('/actualizar-configlote/{id}','App\Http\Controllers\ConfigloteController@actualizarConfiglote');

//API Unidad de medida
Route::post('save-unidadmedida','App\Http\Controllers\UnidadmedidaController@saveUnidadmedida');
Route::get('listar-unidadmedida','App\Http\Controllers\UnidadmedidaController@listarUnidadmedida');
Route::delete('delete-unidadmedida/{id}', 'App\Http\Controllers\UnidadmedidaController@deleteUnidadmedida');
Route::put('/actualizar-unidadmedida/{id}','App\Http\Controllers\UnidadmedidaController@actualizarUnidadmedida');


//API  de producto
Route::post('save-producto','App\Http\Controllers\ProductoController@saveProducto');
Route::get('listar-producto','App\Http\Controllers\ProductoController@listarProducto');
Route::put('/actualizar-producto/{id}','App\Http\Controllers\ProductoController@actualizarProducto');
Route::delete('delete-producto/{id}', 'App\Http\Controllers\ProductoController@deleteProducto');

//API ruta
Route::post('save-ruta','App\Http\Controllers\RutaController@saveRuta');
Route::get('listar-ruta','App\Http\Controllers\RutaController@listarRuta');
Route::put('/actualizar-ruta/{id}','App\Http\Controllers\RutaController@actualizarRuta');
Route::delete('delete-ruta/{id}', 'App\Http\Controllers\RutaController@deleteRuta');

//API centro de costo
Route::post('save-centrocosto','App\Http\Controllers\CentrocostosController@saveCentrocosto');
Route::get('listar-centrocosto','App\Http\Controllers\CentrocostosController@listarCentrocosto');
Route::put('/actualizar-centrocosto/{id}','App\Http\Controllers\CentrocostosController@actualizarCentrocosto');
Route::delete('delete-centrocosto/{id}', 'App\Http\Controllers\CentrocostosController@deleteCentrocosto');

//API Remitente
Route::post('save-remitente','App\Http\Controllers\RemitenteController@saveRemitente');
Route::get('listar-remitente','App\Http\Controllers\RemitenteController@listarRemitente');
Route::put('/actualizar-remitente/{id}','App\Http\Controllers\RemitenteController@actualizarRemitente');
Route::delete('delete-remitente/{id}', 'App\Http\Controllers\RemitenteController@deleteRemitente');

//API etiquetados
Route::post('save-etiquetado','App\Http\Controllers\EtiquetadoController@saveEtiquetado');
Route::get('listar-etiquetado','App\Http\Controllers\EtiquetadoController@listarEtiquetado');

//api de kitting
Route::post('save-kitting','App\Http\Controllers\KittingController@saveKitting');
Route::get('listar-kitting','App\Http\Controllers\KittingController@listarKitting');

//api de orden de compra
Route::post('save-ordencompra','App\Http\Controllers\OrdenCompraController@saveOrdencompra');
Route::get('listar-ordencompra','App\Http\Controllers\OrdenCompraController@listarOrdencompra');
Route::put('/actualizar-ordencompra/{id}','App\Http\Controllers\OrdenCompraController@actualizarOrdencompra');
Route::delete('delete-ordencompra/{id}', 'App\Http\Controllers\OrdenCompraController@deleteOrdencompra');

//api Recepcion 
Route::post('save-recepcion','App\Http\Controllers\RecepcionController@saveRecepcion');
Route::get('listar-recepcion','App\Http\Controllers\RecepcionController@listarRecepcion');
Route::put('/actualizar-recepcion/{id}','App\Http\Controllers\RecepcionController@actualizarRecepcion');
Route::delete('delete-recepcion/{id}', 'App\Http\Controllers\RecepcionController@deleteRecepcion');

//API Recepcion Procesar
Route::post('save-recepcionprocesar','App\Http\Controllers\RecepcionprocesarController@saveRecepcionprocesar');
Route::get('listar-recepcionprocesar','App\Http\Controllers\RecepcionprocesarController@listarRecepcionprocesar');
Route::put('/actualizar-recepcionprocesar/{id}','App\Http\Controllers\RecepcionprocesarController@actualizarRecepcionprocesar');
Route::delete('delete-recepcionprocesar/{id}', 'App\Http\Controllers\RecepcionprocesarController@deleteRecepcionprocesar');
