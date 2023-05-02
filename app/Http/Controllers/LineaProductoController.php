<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LineaProducto;
use Exception;

class LineaProductoController extends Controller
{
 public function saveLineaProducto(Request $request){
    try{
        $lineaProducto = new LineaProducto(); 
        $lineaProducto -> descripcion = $request -> descripcion;
        $lineaProducto -> save();

        return response([
            "status" => 200,
            "msn" => $lineaProducto
        ]);
    }catch (Exception $e){
        return response([
            "status" => 400,
            "msn" => 'No se ha guadardo - error'
        ]);
    }
}

    public function listarLineaProducto(){
        try{
            $lineaProducto = LineaProducto::all();

            return response([
                "status" => 200,
                "msn" => $lineaProducto
            ]);
        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
    }
}

    public function deleteLineaProducto($id){
        try{

            $lineaProducto = LineaProducto::destroy($id);

            return response([
                "status" => 200,
                "data" => 'se ha eliminado registro satisfactoriamente'
            ]);
        }catch (exception $e){
            return response([
                "status" => 400,
                "msn" => 'no se ha guardado - error'
            ]);
        }

    }

    public function actualizarLineaProducto(Request $request){
        try{
            $lineaProducto = LineaProducto::findOrfail($request->id); 
            $lineaProducto -> descripcion = $request -> descripcion;
            $lineaProducto -> save();
    
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
 }   

