<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ubicacion1;
use Illuminate\Http\Request;
use Exception;

class ubicacion1Controller extends Controller
{
    public function saveUbicacion1(Request $request){
        try{
            $ubicaciones = new Ubicacion1();
            $ubicaciones->ubicacion1 = $request->ubicacion1;
            $ubicaciones->save();
    
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
}
