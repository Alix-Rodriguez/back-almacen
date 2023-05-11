<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\RecepcionOrdencerrada;
use Illuminate\Support\Facades\DB;

class RecepcionOrdencerradaController extends Controller
{
    public function saveOrdencerrada(Request $request){
        try{
            $ordencerrada = new RecepcionOrdencerrada();
            $ordencerrada -> id_almacen = $request ->id_almacen;
            $ordencerrada -> id_empresas = $request ->id_empresas;
            $ordencerrada -> status = $request ->status;
            $ordencerrada -> save();
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

    public function listarOrdencerrada(){
        try{
            $ordencerrada = DB::table('recepcion_ordenescerradas')
            ->leftJoin('almacens','almacens.id', '=', 'recepcion_ordenescerradas.id_almacen' )
            ->leftJoin('empresas','empresas.id', '=', 'recepcion_ordenescerradas.id_empresas')
            ->select('recepcion_ordenescerradas.id as id','recepcion_ordenescerradas.status as status','almacens.id as id_almacen', 'almacens.nombre as nombre_almacen',
            'empresas.id as empresas_id','empresas.nombre_empresa as nombre_empresa',
            'empresas.created_at as fechaCreada_empresa','recepcion_ordenescerradas.created_at as creado')
            ->get();
            return response([
                            "status" =>200 ,
                            "data" => $ordencerrada
                        ]);
                    }catch(Exception $e){
                        return response([
                            "status" => 400,
                            "msn" => 'No se ha guardado - error'
                        ]);
                }    
    }
    public function deleteOrdencerrada($id){
        try{

            $ordencerrada = RecepcionOrdencerrada::destroy($id);
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
    public function actualizarOrdencerrada(Request $request){
        try{
            $ordencerrada =  RecepcionOrdencerrada::findOrfail($request->id);
            $ordencerrada -> id_almacen = $request ->id_almacen;
            $ordencerrada -> id_empresas = $request ->id_empresas;
            $ordencerrada -> status = $request ->status;
            $ordencerrada -> save();
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
