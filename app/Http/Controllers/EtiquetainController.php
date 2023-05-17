<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EtiquetaIN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
class EtiquetainController extends Controller
{
    public function saveEtiquetain(Request $request){
        try {
            $etiquetain = new EtiquetaIN();
            $etiquetain -> id_almacen = $request-> id_almacen;
            $etiquetain -> id_empresa = $request-> id_empresa;
            $etiquetain -> fecha = $request-> fecha;
            $etiquetain -> referencia = $request-> referencia;
            $etiquetain -> save();
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

    public function listarEtiquetain(){
        try{
            $etiquein = DB::table('etiqueta_i_n_s')
            ->leftJoin('almacens', 'almacens.id', '=', 'etiqueta_i_n_s.id_almacen')
            ->leftJoin('empresas', 'empresas.id', '=', 'etiqueta_i_n_s.id_empresa')
            ->select('etiqueta_i_n_s.id as id', 'etiqueta_i_n_s.fecha as fecha',
            'etiqueta_i_n_s.referencia as referencia', 'almacens.nombre as nombre_almacen',
            'empresas.nombre_empresa as nombre_empresa')
            ->get();
            return response([
                "status" => 200,
                "data" => $etiquein
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        }
    }
    public function actualizarEtiquetain(Request $request){
        try {
            $etiquetain = EtiquetaIN::findOrfail($request->id);
            $etiquetain -> id_almacen = $request-> id_almacen;
            $etiquetain -> id_empresa = $request-> id_empresa;
            $etiquetain -> fecha = $request-> fecha;
            $etiquetain -> referencia = $request-> referencia;
            $etiquetain -> save();
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
    public function deleteEtiquetain($id){
        try {
            $etiquetain =  EtiquetaIN::destroy($id);
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
