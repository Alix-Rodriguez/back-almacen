<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\movimiento_interno;
use Illuminate\Support\Facades\DB;

class MovimientoInternoController extends Controller
{
    public function saveInterno(Request $request){
        try{
            $interno = new movimiento_interno();
            $interno -> id_empresa = $request-> id_empresa;
            $interno -> id_almacen = $request-> id_almacen;
            $interno -> id_producto = $request-> id_producto;
            $interno -> cantidad = $request-> cantidad;
            $interno -> id_layout = $request-> id_layout;
            $interno -> save();
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
    public function listarInterno(){
        try{
            $interno = DB::table('movimiento_internos')
            ->leftJoin(
                'empresas','empresas.id',
                '=',
                'movimiento_internos.id_empresa'
            )
            ->leftJoin(
                'almacens','almacens.id',
                '=',
                'movimiento_internos.id_almacen'
            )
            ->leftJoin(
                'productos','productos.id',
                '=',
                'movimiento_internos.id_producto'
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
                'movimiento_internos.id',
                'empresas.nombre_empresa as id_empresa',
                'almacens.nombre as id_almacen',
                'productos.sku as id_producto_sku',
                'productos.descripcion as id_producto',
                'unidad_medida.descripcion as id_unidad_medida',
                'movimiento_internos.cantidad',
                'configs_lote.descripcion as lote',
                'racks.descripcion as id_rack',
                'localidads.descripcion as id_localidad',
                'nivels.descripcion as id_nivel',
                'zonas.descripcion as id_zona'
            )
            ->get();
            return response([
                "status" => 200,
                "data" => $interno
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        }
    }

    public function deleteInterno($id){
        try{
            $interno = movimiento_interno::destroy($id);
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
    public function actualizarInterno(Request $request){
        try{
            $interno =  movimiento_interno::findOrfail($request->id);
            $interno -> id_empresa = $request-> id_empresa;
            $interno -> id_almacen = $request-> id_almacen;
            $interno -> id_producto = $request-> id_producto;
            $interno -> cantidad = $request-> cantidad;
            $interno -> id_layout = $request-> id_layout;
            $interno -> save();
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
}
