<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnidadCarga;
use Exception;

class UnidadcargaController extends Controller
{
    public function saveUnidadcarga( Request $request ){
        try{
            $unidad_carga = new UnidadCarga;
            $unidad_carga -> descripcion_unidad_carga = $request -> descripcion_unidad_carga;
            $unidad_carga -> save();
            
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


public function listarUnidadcarga(){
    try{
        $unidad_carga = UnidadCarga::all();

        return response([
            "status" => 200,
            "data" => $unidad_carga
        ]);
    }catch (Exception $e){
        return response([
            "status" => 400,
            "msn" =>'No se ha guardado - error'
        ]);
    }
}

public function actualizarUnidadcarga(Request $request){
    try{
        $unidad_carga =  UnidadCarga::Findorfail($request->id);
            $unidad_carga -> descripcion_unidad_carga = $request -> descripcion_unidad_carga;
            $unidad_carga -> save();
        return response([
            "status" => 200,
            "msn" => 'Se ha actualizado correctamete'
        ]);
    }catch (Exception $e){
        return response([
            "status"=> 400,
            "msn" => 'No se ha guardado - error'
        ]);
    }
}

public function deleteUnidadcarga($id){
    try{
        $unidad_carga = UnidadCarga::destroy(($id));
        return response([
            "status"=> 200,
            "msn" => 'Se ha eliminado registro satisfactoriamente'
        ]);
    }catch(Exception $e){
        return response([
            "status" => 400,
            "msn" => 'No se ha guardado - error'
        ]);
    }
}
}