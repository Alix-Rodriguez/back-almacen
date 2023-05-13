<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programaciondetalle;
use Exception;

class ProgramacionDetalleController extends Controller
{
    public function saveProgramacionDetalle(Request $request){
        try{
            $detalle = new Programaciondetalle();
            $detalle -> id_programacion_progreso = $request-> id_programacion_progreso;
            $detalle -> id_producto = $request->id_producto;
            $detalle -> SKU = $request->SKU;    
            $detalle -> unidad_medida = $request->unidad_medida;
            $detalle -> cantidad = $request->cantidad;
            $detalle -> descripcion = $request->descripcion;
            $detalle -> save();

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
