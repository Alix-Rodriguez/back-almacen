<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etiquetado;
use Exception;
use Illuminate\Support\Facades\Storage;

class EtiquetadoController extends Controller
{
    public function saveEtiquetado(Request $request){
        //try{
            $etiquetado = new Etiquetado();
            $etiquetado -> nombre = $request -> nombre;
            $etiquetado -> archivo_img = $request -> archivo_img;
            /* if($request->hasfile('archivo_img')):
                $img = getB64Image('archivo_img');
                $img_extension = getB64Extension('archivo_img');
                $img_name = 'img_etiquetado'. time() . '.' . $img_extension;
                Storage::disk('images_base64')->put($img_name,$img);
            endif;  */   
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

    public function listarRuta(){
        try{
            $Etiquetado = Etiquetado::all();
            return response([
                "status" => 200,
                "data" => $Etiquetado
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - error'
            ]);
        }
    }
}
