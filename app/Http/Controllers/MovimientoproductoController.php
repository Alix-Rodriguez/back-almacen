<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MovimientoProducto;
use Illuminate\Support\Facades\DB;
use Exception;

class MovimientoproductoController extends Controller
{
    public function saveMovimientoproducto(Request $request){
        try{
            $producto = new MovimientoProducto();
            $producto -> sku = $request-> sku;
            $producto -> unidad_medida = $request-> unidad_medida;
            $producto -> save();
            return response([
                "status" => 200,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        }
    }
    public function listarMovimientoproducto(){
        try{
            $producto = DB::table('movimientos_productos')
            ->leftJoin('productos','productos.id', '=', 'movimientos_productos.sku')
            ->leftJoin('unidad_medida', 'unidad_medida.id', '=', 'movimientos_productos.unidad_medida')
            ->select('movimientos_productos.id as id','productos.id as id_producto','productos.sku as sku',
            'productos.descripcion', 'productos.numero_parte as numero_parte', 'unidad_medida.descripcion as unidad_medida')
            ->get();
            return response([
                "status" => 200,
                "data" => $producto
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        }
    }
    public function deleteMovimientoproducto($id){
        try{

            $layout = MovimientoProducto::destroy($id);
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
    public function actualizarMovimientoproducto(Request $request){
        try{
            $producto =  MovimientoProducto::findOrfail($request->id);
            $producto -> sku = $request-> sku;
            $producto -> unidad_medida = $request-> unidad_medida;
            $producto -> save();
            return response([
                "status" => 200,
                "msn" => 'Se ha actualizado satisfactoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        }
    }
}
