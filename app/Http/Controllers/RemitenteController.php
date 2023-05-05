<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Remitente;
use Exception;

class RemitenteController extends Controller
{
    public function saveRemitente(Request $request){
        try{
        $remitente = new Remitente();
        $remitente -> empresa = $request -> empresa;
        $remitente -> almacen = $request -> almacen;
        $remitente -> calle = $request -> calle;
        $remitente -> numero_interno = $request -> numero_interno;
        $remitente -> numero_externo = $request -> numero_externo;
        $remitente -> colonia = $request -> colonia;
        $remitente -> delegacion = $request -> delegacion;
        $remitente -> codigo_postal = $request -> codigo_postal;
        $remitente -> telefono = $request -> telefono;
        $remitente -> email = $request -> email;
        $remitente -> rfc = $request -> rfc;
        $remitente -> save();
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

public function listarRemitente(){
    try{
        $remitente = Remitente::all();

        return response([
            "status" => 200,
            "data" => $remitente
        ]);
    }catch (Exception $e){
        return response([
            "status" => 400,
            "msn" => 'No se ha guardado - error'
        ]);
    }
}

public function actualizarRemitente(Request $request){
    try{
    $remitente =  Remitente::findOrfail($request->id);
    $remitente -> empresa = $request -> empresa;
    $remitente -> almacen = $request -> almacen;
    $remitente -> calle = $request -> calle;
    $remitente -> numero_interno = $request -> numero_interno;
    $remitente -> numero_externo = $request -> numero_externo;
    $remitente -> colonia = $request -> colonia;
    $remitente -> delegacion = $request -> delegacion;
    $remitente -> codigo_postal = $request -> codigo_postal;
    $remitente -> telefono = $request -> telefono;
    $remitente -> email = $request -> email;
    $remitente -> rfc = $request -> rfc;
    $remitente -> save();
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

public function deleteRemitente($id){
    try{
        $remitente = Remitente::destroy($id);

        return response([
            "status" => 200,
            "msn" => 'Se ha eliminado el registro'
        ]);
    }catch (Exception $e){
        return response([
            "status" => 400,
            "msn" => 'No se ha guardado - error'
        ]);
    }
}
}
