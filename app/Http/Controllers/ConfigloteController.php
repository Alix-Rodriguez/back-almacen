<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Configlote;
use Exception;

class ConfigloteController extends Controller
{
    public function saveConfiglote(Request $request){
        try{
            $configlote = New Configlote();
            $configlote -> descripcion = $request ->descripcion;
            $configlote -> save();

            return response([
                "status" => 200,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No ha guardado - error'
            ]);
    }
}

public function listarConfiglote(){
    try{
        $configlote = Configlote::all();
        return response([
            "status" => 200,
            "data" => $configlote
        ]);
    }catch(Exception $e){
        return response([
            "status" => 400,
            "msn" => 'No se ha guardado - error'
        ]);
    }
}
public function actualizarConfiglote(Request $request){
    try{
        $configlote = Configlote::findOrfail($request->id);
        $configlote->descripcion = $request->descripcion;
        $configlote->save();

        return response([
            "status" => 200,
            "msn" => 'Se ha actualizado satisfatoriamente'
        ]);

    }catch (Exception $e){
        return response([
            "status" => 400,
            "msn" => 'No se ha guadardo - error'
        ]);
    }   
}

public function deleteConfiglote($id){
    try{
        $configlote = Configlote::destroy($id);
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