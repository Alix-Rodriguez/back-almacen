<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EtiquetaOUT;
use Exception;
use Illuminate\Support\Facades\DB;

class EtiquetaoutController extends Controller
{
    public function saveEtiquetaout(Request $request){
        try {
            $etiquetaout = new EtiquetaOUT();
            $etiquetaout -> id_almacen = $request-> id_almacen;
            $etiquetaout -> id_empresa = $request-> id_empresa;
            $etiquetaout -> fecha_picking = $request-> fecha_picking;
            $etiquetaout -> save();
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

    public function listarEtiquetaout(){
        try{
            $etiquetaout = DB::table('etiqueta_o_u_t_s')
            ->leftJoin('almacens', 'almacens.id', '=', 'etiqueta_o_u_t_s.id_almacen')
            ->leftJoin('empresas', 'empresas.id', '=', 'etiqueta_o_u_t_s.id_empresa')
            ->select('etiqueta_o_u_t_s.id as id', 'etiqueta_o_u_t_s.fecha_picking as fecha',
            'almacens.nombre as nombre_almacen',
            'empresas.nombre_empresa as nombre_empresa')
            ->get();
            return response([
                "status" => 200,
                "data" => $etiquetaout
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        }
    }
    public function actualizarEtiquetaout(Request $request){
        try {
            $etiquetaout =  EtiquetaOUT::findOrfail($request->id);
            $etiquetaout -> id_almacen = $request-> id_almacen;
            $etiquetaout -> id_empresa = $request-> id_empresa;
            $etiquetaout -> fecha_picking = $request-> fecha_picking;
            $etiquetaout -> save();
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
    public function deleteEtiquetaout($id){
        try {
            $etiquetaout =  EtiquetaOUT::destroy($id);
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
