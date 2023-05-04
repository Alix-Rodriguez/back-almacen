<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function saveProducto(Request $request){
        //try{
            $producto = new Producto();
            $producto-> id_empresas = $request -> id_empresas;
            $producto -> sku = $request->sku;
            $producto -> descripcion = $request->descripcion;
            $producto -> modelo = $request->modelo;
            $producto -> id_linea_producto = $request->id_linea_producto;
            $producto -> id_marca = $request->id_marca;
            $producto -> serialisable = $request->serialisable;
            $producto -> caducidad = $request->caducidad;
            $producto -> sobresurtimiento = $request->sobresurtimiento;
            $producto -> serialisable_surtir = $request->serialisable_surtir;
            $producto -> requiere_inspeccion_calidad = $request->requiere_inspeccion_calidad;
            $producto -> requiere_fecha_cadu = $request->requiere_fecha_cadu;
            $producto -> numero_parte = $request->numero_parte;
            $producto -> requiere_lote = $request->requiere_lote;
            $producto -> lote_compuesto = $request->lote_compuesto;
            $producto -> id_config_lote = $request->id_config_lote;
            $producto -> id_unidad_de_medida = $request->id_unidad_de_medida;
            $producto -> peso = $request->peso;
            $producto -> fecha_descontinuo = $request->fecha_descontinuo;
            $producto -> status = $request->status;
            $producto -> sku_compuesto = $request->sku_compuesto;
            $producto -> sku_proveedores = $request->sku_proveedores;
            $producto -> save();
            
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        /* }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } */
    }
}
