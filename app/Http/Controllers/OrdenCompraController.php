<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrdenCompra;
use Exception;
use Illuminate\Support\Facades\DB;

class OrdenCompraController extends Controller
{
    public function saveOrdencompra(Request $request){
        try{
            $ordencompra = new OrdenCompra();
            $ordencompra -> referencia = $request-> referencia;
            $ordencompra -> id_proveedor = $request-> id_proveedor;
            $ordencompra -> fecha = $request-> fecha;
            $ordencompra -> id_centro_costo = $request-> id_centro_costo;
            $ordencompra -> id_tipo_orden = $request-> id_tipo_orden;
            $ordencompra -> central = $request-> central;
            $ordencompra -> indicaciones = $request -> indicaciones;
            $ordencompra -> observaciones = $request -> observaciones;
            $ordencompra -> save();
            return response([
                "status" =>200 ,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - error'
            ]);
        }
    }
    
    public function listarOrdencompra(){
        try{
            $ordencompra = DB::table('orden_compras')
            ->leftJoin('proveedores','proveedores.id', '=', 'orden_compras.id_proveedor' )
            ->leftJoin('centro_costos','centro_costos.id', '=', 'orden_compras.id_centro_costo')
            ->select('orden_compras.id as id','proveedores.id as proveedor_id', 'proveedores.nombre_proveedor as nombre_proveedor',
            'centro_costos.id as centro_costos_id','centro_costos.descripcion as centro_costos_descripcion',
            'orden_compras.referencia as referencia','orden_compras.fecha as fecha', 'orden_compras.id_tipo_orden as id_tipo_orden',
            'orden_compras.central as central', 'orden_compras.indicaciones as indicaciones', 
            'orden_compras.observaciones as observaciones')
            ->get();
            return response([
                            "status" =>200 ,
                            "data" => $ordencompra
                        ]);
                     }catch(Exception $e){
                         return response([
                             "status" => 400,
                             "msn" => 'No se ha guardado - error'
                         ]);
                 }      
    }

    public function deleteOrdencompra($id){
        try{

            $layout = OrdenCompra::destroy($id);
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

    public function actualizarOrdencompra(Request $request){
        try{
            $ordencompra =  OrdenCompra::findOrfail($request->id);
            $ordencompra -> referencia = $request-> referencia;
            $ordencompra -> id_proveedor = $request-> id_proveedor;
            $ordencompra -> fecha = $request-> fecha;
            $ordencompra -> id_centro_costo = $request-> id_centro_costo;
            $ordencompra -> id_tipo_orden = $request-> id_tipo_orden;
            $ordencompra -> central = $request-> central;
            $ordencompra -> indicaciones = $request -> indicaciones;
            $ordencompra -> observaciones = $request -> observaciones;
            $ordencompra -> save();
            return response([
                "status" =>200 ,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);
         }catch(Exception $e){
             return response([
                 "status" => 400,
                 "msn" => 'No se ha guardado - error'
                ]);
            } 
        }
}

    
    