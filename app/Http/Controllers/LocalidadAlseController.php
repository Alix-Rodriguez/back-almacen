<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Localidad_alse;

class LocalidadAlseController extends Controller
{
    public function crearLocalidadAlse(Request $request){
        try{
            $localidad = new Localidad_alse();
            $localidad->descripcion = $request->descripcion;
            $localidad-> save();
    
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }


    public function listarLocalidadAlse(){
        try{

            $localidad = Localidad_alse::all();
    
            return response([
                "status" => 200,
                "data" => $localidad
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
    }
}
