<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Centrocosto;
use Exception;
use Illuminate\Support\Facades\DB;
class CentrocostosController extends Controller
{
 public function saveCentrocosto(Request $request){
    try{

        $centro = New Centrocosto();
        $centro -> id_empresa = $request -> id_empresa;
        $centro -> id_cliente = $request -> id_cliente;
        $centro -> id_marca = $request -> id_marca;
        $centro -> id_ubicacion_elsea = $request -> id_ubicacion_elsea;
        $centro -> descripcion = $request -> descripcion;
        $centro -> save();
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

 public function listarCentrocosto(){
    try{
        $centro = DB::table('centro_costos')
        ->leftJoin(
            'empresas','empresas.id',
            '=',
            'centro_costos.id_empresa'
        )
        ->leftJoin(
            'clientes','clientes.id',
            '=',
            'centro_costos.id_cliente'
        )
        ->leftJoin(
            'marcas','marcas.id',
            '=',
            'centro_costos.id_marca'
        )
        ->select(
            'centro_costos.id',
            'empresas.nombre_empresa',
            'clientes.nombre_cliente',
            'marcas.marca',
            'centro_costos.id_ubicacion_elsea',
            'centro_costos.descripcion'
        )
        ->get();
        return response([
            "status" => 200,
            "data" => $centro
        ]);
    }catch(Exception $e){
        return response([
            "status" => 400,
            "msn" => 'No se ha guardado - error'
        ]);
    }
 }

 public function actualizarCentrocosto(Request $request){
    try{

        $centro = Centrocosto::findOrfail($request->id);
        $centro -> id_empresa = $request -> id_empresa;
        $centro -> id_cliente = $request -> id_cliente;
        $centro -> id_marca = $request -> id_marca;
        $centro -> id_ubicacion_elsea = $request -> id_ubicacion_elsea;
        $centro -> descripcion = $request -> descripcion;
        $centro -> save();
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

 public function deleteCentrocosto($id){
    try{

        $centro = CentroCosto::destroy($id);
        return response([
            "status" => 200,
            "data" => 'Se ha eliminado registro satisfactoriamente'
        ]);

    }catch (Exception $e){
        return response([
            "status" => 400,
            "msn" => 'No se ha guadardo - error'
        ]);
    }
}
}
