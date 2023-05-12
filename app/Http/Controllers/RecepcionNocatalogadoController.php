<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\RecepcionNocatalogado;
use Illuminate\Support\Facades\DB;
class RecepcionNocatalogadoController extends Controller
{
    public function saveNocatalogado(Request $request){
        try{
            $nocatalogado = new RecepcionNocatalogado();
            $nocatalogado -> id_almacen = $request ->id_almacen;
            $nocatalogado -> id_empresas = $request ->id_empresas;
            $nocatalogado -> save();
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

    public function listarNocatalogado(){
        try{
            $nocatalogado = DB::table('recepcion_nocatalogado')
            ->leftJoin('almacens','almacens.id', '=', 'recepcion_nocatalogado.id_almacen' )
            ->leftJoin('empresas','empresas.id', '=', 'recepcion_nocatalogado.id_empresas')
            ->select('recepcion_nocatalogado.id as id','almacens.id as id_almacen', 'almacens.nombre as nombre_almacen',
            'empresas.id as empresas_id','empresas.nombre_empresa as nombre_empresa',
            'empresas.created_at as fechaCreada_empresa','recepcion_nocatalogado.created_at as creado')
            ->get();
            return response([
                            "status" =>200 ,
                            "data" => $nocatalogado
                        ]);
                    }catch(Exception $e){
                        return response([
                            "status" => 400,
                            "msn" => 'No se ha guardado - error'
                        ]);
                }    
    }
    public function deleteNocatalogado($id){
        try{

            $recepcion = RecepcionNocatalogado::destroy($id);
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
    public function actualizarNocatalogado(Request $request){
        try{
            $nocatalogado = RecepcionNocatalogado::findOrfail($request->id);
            $nocatalogado -> id_almacen = $request ->id_almacen;
            $nocatalogado -> id_empresas = $request ->id_empresas;
            $nocatalogado -> save();
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
