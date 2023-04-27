<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ubicacion;
use Exception;

class UbicacionController extends Controller
{
    public function saveUbicacion(Request $request){
        //try{
            $ubicacion = new Ubicacion();
            $ubicacion->ubicacion = $request->ubicacion;
            $ubicacion->save();
    
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        /* }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } */
        
    }
}
