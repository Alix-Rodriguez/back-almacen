<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Unidadmedida;

class UnidadmedidaController extends Controller
{
    public function saveUnidadmedida(Request $request){
        try{
            $unidadMedida = New Unidadmedida();
            $unidadMedida -> descripcion = $request ->descripcion;
            $unidadMedida -> save();

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

public function listarUnidadmedida(){
    try{
        $unidadMedida = Unidadmedida::all();
        return response([
            "status" => 200,
            "data" => $unidadMedida
        ]);
    }catch(Exception $e){
        return response([
            "status" => 400,
            "msn" => 'No se ha guardado - error'
        ]);
    }
}
public function actualizarUnidadmedida(Request $request){
    try{
        $unidadMedida = Unidadmedida::findOrfail($request->id);
        $unidadMedida->descripcion = $request->descripcion;
        $unidadMedida->save();

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

public function deleteUnidadmedida($id){
    try{
        $unidadMedida = Unidadmedida::destroy($id);
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
