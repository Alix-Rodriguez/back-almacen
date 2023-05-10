<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kitting;
use Exception;
use Illuminate\Support\Facades\DB;

class KittingController extends Controller
{
    public function saveKitting(Request $request){
        //try{
            $kitting = new Kitting();
            $kitting -> id_producto = $request -> id_producto;
            $kitting -> id_kitting = $request -> id_kitting;
            $kitting ->save();
            return response([
                "status" => 200,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
        /* }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        } */
    }



    public function listarKitting(){
        try{
            $resultado = DB::table('kittings')
            ->rightJoin('productos', 'productos.id', '=' , 'kittings.id_producto')
            ->select('productos.id as id_producto', 'productos.descripcion as descripcion_producto')
            ->get();
            return response([
                "status" =>200 ,
                "message" => "success",
                "data" => $resultado
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "message" => "No se ha guardado - Error",
            ]);
    }
}
}