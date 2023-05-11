<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Recepcion;
use Illuminate\Support\Facades\DB;


class RecepcionController extends Controller
{
    public function saveRecepcion(Request $request){
        try{
            $recepcion = new Recepcion();
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

    public function listarRecepcion(){
        try{
            $recepcion = DB::table('recepcions')
            ->leftJoin('almacens','almacens.id', '=', 'recepcions.id_almacen' )
            ->leftJoin('empresas','empresas.id', '=', 'recepcions.id_empresas')
            ->select('recepcions.id as id','almacens.id as id_almacen', 'almacens.nombre as nombre_almacen',
            'empresas.id as empresas_id','empresas.nombre_empresa as nombre_empresa',
            'empresas.created_at as fechaCreada_empresa','recepcions.created_at as creado')
            ->get();
            return response([
                            "status" =>200 ,
                            "data" => $recepcion
                        ]);
                    }catch(Exception $e){
                        return response([
                            "status" => 400,
                            "msn" => 'No se ha guardado - error'
                        ]);
                }    
    }
    public function deleteRecepcion($id){
        try{

            $recepcion = Recepcion::destroy($id);
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
    public function actualizarRecepcion(Request $request){
        try{
            $recepcion = Recepcion::findOrfail($request->id);
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
}

