<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramacionProgreso;
use Exception;

class ProgramacionProgresoController extends Controller
{
    public function saveProgramacionProgreso(Request $request){
        try{
            $progreso = new ProgramacionProgreso();
            $progreso -> id_proveedor = $request-> id_proveedor;
            $progreso -> id_almacen = $request->id_almacen;  
            $progreso -> id_empresa = $request->id_empresa;
            $progreso -> fecha = $request->fecha;
            $progreso -> indicaciones = $request->indicaciones;
            $progreso -> observacion = $request->observacion;
            $progreso -> save();

            return response([
                "status" => 200,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
        }catch(Exception $e){
            return response([
                'status' => 400,
                'msn' => 'No se ha guardado - Error'
            ]);
        }
    }
}
