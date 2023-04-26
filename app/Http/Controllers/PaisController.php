<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paises;
use Exception;
class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function savePaises(Request $request){

     try{
        $paises = new Paises();
        $paises -> codigo_pais = $request -> codigo_pais;
        $paises -> pais = $request -> pais;
        $paises -> save();
        return response([
            "status" => 200,
            "msn" => 'Se ha guardado satisfactoriamente'
        ]);
     }catch (Exception $e){
        return response([
            "status" => 400,
            "msn" => 'No se ha guardado - error'
        ]);
     }
    }
        
    

    /**
     * Show the form for creating a new resource.
     */
    public function listarPaises()
    {
        try{

            $pais = Paises::all();
    
            return response([
                "status" => 200,
                "data" => $pais
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }

   
}
