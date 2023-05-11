<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\RecepcionUbicarcerrar;
use Illuminate\Support\Facades\DB;

class RecepcionUbicarcerrarController extends Controller
{
    public function saveUbicarcerrar(Request $request){
        try{
            $recepcion = new RecepcionUbicarcerrar();
            $recepcion -> id_almacen = $request ->id_almacen;
            $recepcion -> id_empresas = $request ->id_empresas;
            $recepcion -> save();
            return response([
                "status"=> 200,
                "msn" =>'Se ha guardado satisfactoriamente'
            ]);
         }catch(Exception $e){
            return response([
                "status"=> 400,
                "msn" =>'No se ha guardado - Error'
            ]);
        } 
    }

    public function listarUbicarcerrar(){
        try{
            $ubicarcerrar = DB::table('recepcion_ubicarcerrar')
            ->leftJoin('almacens','almacens.id', '=', 'recepcion_ubicarcerrar.id_almacen' )
            ->leftJoin('empresas','empresas.id', '=', 'recepcion_ubicarcerrar.id_empresas')
            ->select('recepcion_ubicarcerrar.id as id','almacens.id as id_almacen', 'almacens.nombre as nombre_almacen',
            'empresas.id as empresas_id','empresas.nombre_empresa as nombre_empresa',
            'empresas.created_at as fechaCreada_empresa','recepcion_ubicarcerrar.created_at as creado')
            ->get();
            return response([
                            "status" =>200 ,
                            "data" => $ubicarcerrar
                        ]);
                    }catch(Exception $e){
                        return response([
                            "status" => 400,
                            "msn" => 'No se ha guardado - error'
                        ]);
                }    
    }
    public function deleteUbicarcerrar($id){
        try{

            $ubicarcerrar = RecepcionUbicarcerrar::destroy($id);
            return response([
                "status" => 200,
                "data" => 'Se ha eliminado registro satisfactoriamente'
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }
    public function actualizarUbicarcerrar(Request $request){
        try{
            $ubicarcerrar = RecepcionUbicarcerrar::findOrfail($request->id);
            $ubicarcerrar -> id_almacen = $request ->id_almacen;
            $ubicarcerrar -> id_empresas = $request ->id_empresas;
            $ubicarcerrar -> save();
            return response([
                "status"=> 200,
                "msn" =>'Se ha guardado satisfactoriamente'
            ]);
         }catch(Exception $e){
            return response([
                "status"=> 400,
                "msn" =>'No se ha guardado - Error'
            ]);
        } 
    }  
}
