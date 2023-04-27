<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Http\Request;
use Exception;

class MarcaController extends Controller
{
    public function saveMarcas(Request $request){
        try{
            $marca = new Marca();
            $marca->marca = $request->marca;
            $marca->save();
    
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

    public function listarMarcas(){
        try{

            $marca = Marca::all();
    
            return response([
                "status" => 200,
                "data" => $marca
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
    }
}
