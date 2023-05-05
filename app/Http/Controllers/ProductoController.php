<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Exception;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function saveProducto(Request $request){
        try{
            $producto = new Producto();
            $producto-> id_empresa = $request -> id_empresa;
            $producto -> sku = $request->sku;
            $producto -> descripcion = $request->descripcion;
            $producto -> modelo = $request->modelo;
            $producto -> id_linea_producto = $request->id_linea_producto;
            $producto -> id_marca = $request->id_marca;
            $producto -> serialisable = $request->serialisable;
            $producto -> caducidad = $request->caducidad;
            $producto -> caducidad1 = $request->caducidad1;
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
            $producto -> save();
            
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }

    public function listarProducto(){
        try{
            $producto = Producto::all();
            return response([
                "status" => 200,
                "data" => $producto
            ]);
        }catch(Exception $e){
            return response([
                "status" => 200,
                "msn" => 'No se ha guardado - error'
            ]);
        }
    }

    public function actualizarProducto(Request $request){
        try{
            $producto =  Producto::findOrfail($request->id);
            $producto-> id_empresa = $request -> id_empresa;
            $producto -> sku = $request->sku;
            $producto -> descripcion = $request->descripcion;
            $producto -> modelo = $request->modelo;
            $producto -> id_linea_producto = $request->id_linea_producto;
            $producto -> id_marca = $request->id_marca;
            $producto -> serialisable = $request->serialisable;
            $producto -> caducidad = $request->caducidad;
            $producto -> caducidad1 = $request->caducidad1;
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
        
            $producto -> save();
            
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }

    public function deleteProducto($id){
        try{
            $producto = Producto::destroy($id);
            return response([
                "status" => 200,
                "msn" => 'Se ha eliminado el registro satisfactoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 200,
                "msn" => 'No se ha guardado - error'
            ]);
        }
    }
}
