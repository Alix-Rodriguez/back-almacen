<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etiquetado;
use Exception;
use Illuminate\Support\Str;

class EtiquetadoController extends Controller
{
    public function saveEtiquetado(Request $request){
        //try{
            $etiquetado = new Etiquetado();
            $etiquetado -> nombre = $request -> nombre;
            $etiquetado -> archivo_img = $request -> archivo_img;
            if ($imagen = $request->file('archivo_img')):
                $rutaGuardarImg = 'imagen/';
                $archivo_imagen = date('YmdHis').".". $imagen ->getClientOriginalExtension();
                $imagen->move($rutaGuardarImg,$archivo_imagen);
                $etiquetado['archivo_img'] = "$archivo_imagen";
            endif;
            $etiquetado -> status = $request -> status;
            $etiquetado -> sistema = $request -> sistema;
            $etiquetado -> impresion = $request -> impresion;
            $etiquetado -> save();

            return response([
                "status" => 200,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
        /* }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - error'
            ]);

        } */
    }
}
