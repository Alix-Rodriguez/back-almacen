<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movimiento_entre_almacen;
use Exception;
use Illuminate\Support\Facades\DB;

class Movimiento_entre_almacenController extends Controller
{
    public  function saveEntrealmacen(Request $request){
        try{
            $entrealmacen = new Movimiento_entre_almacen();
            $entrealmacen -> id_almacen_origen = $request -> id_almacen_origen;
            $entrealmacen -> id_almacen_destino = $request -> id_almacen_destino;
            $entrealmacen -> id_empresa = $request -> id_empresa;
            $entrealmacen -> id_producto = $request -> id_producto;
            $entrealmacen -> id_layout = $request -> id_layout;
            $entrealmacen -> cantidad = $request -> cantidad;
            $entrealmacen -> save();
            return response([
                "status" => 200,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        }
    }
    public  function listarEntrealmacen(){
        //try{
            $entrealmacen = DB::table('movimiento_entre_almacens')
            ->leftJoin(
                'empresas','empresas.id',
                '=',
                'movimiento_entre_almacens.id_empresa'
            )
            ->leftJoin(
                'almacens','almacens.id',
                '=',
                'movimiento_entre_almacens.id_almacen_origen'
            )
           
            ->leftJoin(
                'productos','productos.id',
                '=',
                'movimiento_entre_almacens.id_producto'
            )
            ->leftJoin(
                'unidad_medida','unidad_medida.id',
                '=',
                'productos.id_unidad_de_medida'
            )
            ->leftJoin(
                'configs_lote','configs_lote.id',
                '=',
                'productos.id_config_lote'
            )
            ->leftJoin(
                'layouts','layouts.id',
                '=',
                'productos.id_layout'
            )
            ->leftJoin(
                'racks','racks.id',
                '=',
                'layouts.id_rack'
            )
            ->leftJoin(
                'localidads','localidads.id',
                '=',
                'layouts.id_localidad'
            )
            ->leftJoin(
                'nivels','nivels.id',
                '=',
                'layouts.id_nivel'
            )
            ->leftJoin(
                'zonas','zonas.id',
                '=',
                'layouts.id_zona'
            )
            ->select(
                'movimiento_entre_almacens.id',
                'empresas.nombre_empresa as id_empresa',
                'almacens.nombre as id_almacen_origen',
                'movimiento_entre_almacens.id_almacen_destino as id_almacen_destino',
                'productos.sku as id_producto_sku',
                'productos.descripcion as id_producto',
                'unidad_medida.descripcion as id_unidad_medida',
                'movimiento_entre_almacens.cantidad',
                'configs_lote.descripcion as lote',
                'racks.descripcion as id_rack',
                'localidads.descripcion as id_localidad',
                'nivels.descripcion as id_nivel',
                'zonas.descripcion as id_zona'
            )
            ->get();
            return response([
                "status" => 200,
                "data" => $entrealmacen
            ]);
        /* }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        } */
    }
    public  function actualizarEntrealmacen(Request $request){
        try{
            $entrealmacen =  Movimiento_entre_almacen::findOrfail($request->id);
            $entrealmacen -> id_almacen_origen = $request -> id_almacen_origen;
            $entrealmacen -> id_almacen_destino = $request -> id_almacen_destino;
            $entrealmacen -> id_empresa = $request -> id_empresa;
            $entrealmacen -> id_producto = $request -> id_producto;
            $entrealmacen -> id_layout = $request -> id_layout;
            $entrealmacen -> cantidad = $request -> cantidad;
            $entrealmacen -> save();
            return response([
                "status" => 200,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        }
    }
    public  function deleteEntrealmacen($id){
        try{
            $entrealmacen = Movimiento_entre_almacen::destroy($id);
            return response([
                "status" => 200,
                "msn" => 'Se ha eliminado el registro'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        }
    }
}
