<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Recepcionprocesar;
use Illuminate\Support\Facades\DB;


class RecepcionprocesarController extends Controller
{
    public function saveRecepcionprocesar(Request $request){
        try{
            $recepcionprocesar = new Recepcionprocesar();
            $recepcionprocesar -> id_almacen = $request ->id_almacen;
            $recepcionprocesar -> id_empresas = $request ->id_empresas;
            $recepcionprocesar -> status = $request ->status;
            $recepcionprocesar -> save();
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

    public function listarRecepcionprocesar(){
        try{
            $recepcionprocesar = DB::table('recepcion_procesar')
            ->leftJoin('almacens','almacens.id', '=', 'recepcion_procesar.id_almacen' )
            ->leftJoin('empresas','empresas.id', '=', 'recepcion_procesar.id_empresas')
            ->select('recepcion_procesar.id as id','recepcion_procesar.status as status','almacens.id as id_almacen', 'almacens.nombre as nombre_almacen',
            'empresas.id as empresas_id','empresas.nombre_empresa as nombre_empresa',
            'empresas.created_at as fechaCreada_empresa','recepcion_procesar.created_at as creado')
            ->get();
            return response([
                            "status" =>200 ,
                            "data" => $recepcionprocesar
                        ]);
                    }catch(Exception $e){
                        return response([
                            "status" => 400,
                            "msn" => 'No se ha guardado - error'
                        ]);
                }    
    }
    public function deleteRecepcionprocesar($id){
        try{

            $recepcionprocesar = Recepcionprocesar::destroy($id);
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
    public function actualizarRecepcionprocesar(Request $request){
        try{
            $recepcionprocesar =  Recepcionprocesar::findOrfail($request->id);
            $recepcionprocesar -> id_almacen = $request ->id_almacen;
            $recepcionprocesar -> id_empresas = $request ->id_empresas;
            $recepcionprocesar -> status = $request ->status;
            $recepcionprocesar -> save();
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
