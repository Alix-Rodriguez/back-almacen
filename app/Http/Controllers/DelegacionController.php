<?php

namespace App\Http\Controllers;

use App\Models\Delegacion;
use Exception;
use Illuminate\Http\Request;

class DelegacionController extends Controller
{
    public function listDelegacion(){
        try{
            $delegacion = Delegacion::all();
    
            return response([
                "status" => 200,
                "data" => $delegacion
            ]);

        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'Error'
            ]);
        }
    }

    public function guardarAllDelegaciones(Request $request){
        try{
            
            $dele = $request->json();
            foreach($dele as $value){
                $delegacion = new Delegacion();
                $delegacion->descripcion = $value["descripcion"];
                $delegacion->code_delegacion = $value["code_delegacion"];
                $delegacion-> save();
            }
           
    
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => $e
            ]);
        }
    }
}
