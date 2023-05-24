<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function saveProducto(Request $request){
        //try{
            $producto = new Producto();
            $producto-> id_empresa = $request -> id_empresa;
            $producto -> sku = $request->sku;
            $producto -> descripcion = $request->descripcion;
            $producto -> modelo = $request->modelo;
            $producto -> id_linea_producto = $request->id_linea_producto;
            $producto -> id_marca = $request->id_marca;
            $producto -> serialisable = $request->serialisable;
            $producto -> caducidad = $request->caducidad;
            // $producto -> caducidad1 = $request->caducidad1;
            $producto -> sobresurtimiento = $request->sobresurtimiento;
            $producto -> serialisable_surtir = $request->serialisable_surtir;
            $producto -> requiere_inspeccion_calidad = $request->requiere_inspeccion_calidad;
            $producto -> requiere_fecha_cadu = $request->requiere_fecha_cadu;
            $producto -> numero_parte = $request->numero_parte;
            $producto -> requiere_lote = $request->requiere_lote;
            // $producto -> lote_compuesto = $request->lote_compuesto;
            $producto -> id_config_lote = $request->id_config_lote;
            $producto -> id_unidad_de_medida = $request->id_unidad_de_medida;
            $producto -> peso = $request->peso;
             $producto -> fecha_descontinuo = $request->fecha_descontinuo;
            $producto -> status = $request->status;
            $producto -> kitting = $request->kitting;
            // $producto -> sku_proveedores = $request->sku_proveedores;
            $producto -> id_layout = $request->id_layout;
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

    public function listarProducto(){
        //try{
            $producto = DB::table('productos')
            ->leftJoin('empresas','empresas.id', '=', 'productos.id_empresa')
            ->leftJoin('linea_productos','linea_productos.id','=', 'productos.id_empresa')
            ->leftJoin('marcas','marcas.id','=', 'productos.id_marca')
            ->leftJoin('configs_lote','configs_lote.id','=', 'productos.id_config_lote')
            ->leftJoin('unidad_medida','unidad_medida.id','=', 'productos.id_unidad_de_medida')
            ->leftJoin(
                'layouts','layouts.id',
                '=',
                'productos.id_layout'
            )
            ->leftJoin(
                'racks','racks.id',
                '=',
                'layouts.id_rack'
            )
            ->leftJoin(
                'localidads','localidads.id',
                '=',
                'layouts.id_localidad'
            )
            ->leftJoin(
                'nivels','nivels.id',
                '=',
                'layouts.id_nivel'
            )
            ->leftJoin(
                'zonas','zonas.id',
                '=',
                'layouts.id_zona'
            )
            ->select('productos.id','empresas.nombre_empresa as id_empresa','productos.sku', 'productos.descripcion',
            'productos.modelo', 'linea_productos.descripcion as id_linea_producto','marcas.marca as id_marca',
            'productos.serialisable', 'productos.caducidad','productos.sobresurtimiento','productos.serialisable_surtir',
            'productos.requiere_inspeccion_calidad','productos.requiere_fecha_cadu','productos.numero_parte',
            'productos.requiere_lote','configs_lote.descripcion as id_config_lote','unidad_medida.descripcion as id_unidad_de_medida',
            'productos.peso','productos.fecha_descontinuo','productos.status','productos.kitting',
            'racks.descripcion as id_rack',
                'localidads.descripcion as id_localidad',
                'nivels.descripcion as id_nivel',
                'zonas.descripcion as id_zona'
            )
            ->get();
            return response([
                "status" => 200,
                "data" => $producto
            ]);
        /* }catch(Exception $e){
            return response([
                "status" => 200,
                "msn" => 'No se ha guardado - error'
            ]);
        } */
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
            // $producto -> caducidad1 = $request->caducidad1;
            $producto -> sobresurtimiento = $request->sobresurtimiento;
            $producto -> serialisable_surtir = $request->serialisable_surtir;
            $producto -> requiere_inspeccion_calidad = $request->requiere_inspeccion_calidad;
            $producto -> requiere_fecha_cadu = $request->requiere_fecha_cadu;
            $producto -> numero_parte = $request->numero_parte;
            $producto -> requiere_lote = $request->requiere_lote;
            // $producto -> lote_compuesto = $request->lote_compuesto;
            $producto -> id_config_lote = $request->id_config_lote;
            $producto -> id_unidad_de_medida = $request->id_unidad_de_medida;
            $producto -> peso = $request->peso;
            $producto -> fecha_descontinuo = $request->fecha_descontinuo;
            $producto -> status = $request->status;
            $producto -> kitting = $request->kitting;
            $producto -> id_layout = $request->id_layout;

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
