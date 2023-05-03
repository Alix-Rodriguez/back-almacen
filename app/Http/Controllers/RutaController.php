<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ruta;
use Exception;

class RutaController extends Controller
{
    public function saveRuta(Request $request){
        try{
            $ruta = new Ruta();
            $ruta -> empresa =  $request ->empresa;
            $ruta -> almacen =  $request ->almacen;
            $ruta -> codigo_postal_inicio =  $request ->codigo_postal_inicio;
            $ruta -> codigo_postal_fin =  $request ->codigo_postal_fin;            
            $ruta -> save();
            return response([
                "status" => 200,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - error'
            ]);
        }
    }

    public function listarRuta(){
        try{
            $ruta = Ruta::all();
            return response([
                "status" => 200,
                "data" => $ruta
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - error'
            ]);
        }
    }

    public function actualizarRuta(Request $request){
        try{
            $ruta =  Ruta::findOrfail($request->id);
            $ruta -> empresa =  $request ->empresa;
            $ruta -> almacen =  $request ->almacen;
            $ruta -> codigo_postal_inicio =  $request ->codigo_postal_inicio;
            $ruta -> codigo_postal_fin =  $request ->codigo_postal_fin;            
            $ruta -> save();
            return response([
                "status" => 200,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - error'
            ]);
        }   
    }

    public function deleteRuta($id){
        try{
            $ruta = Ruta::destroy($id);
            return response([
                "status" => 200,
                "msn" => 'Se ha eliminado registro satisfactoriamente'
            ]);
        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - error'
            ]);
        }
    }

}
