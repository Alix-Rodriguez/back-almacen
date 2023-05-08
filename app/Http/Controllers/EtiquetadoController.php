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
            if ($request->hasFile('archivo_img')){
                $imagen = $request -> file('archivo_img');
                $nombre_imagen = Str::slug($request->archivo_img).".".$imagen->guessExtension();
                $ruta = public_path('img/etiquetado/');
                $etiquetado ->imagen = $nombre_imagen;
            }
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
