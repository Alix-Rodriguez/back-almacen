<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Exception;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function saveEmpresa(Request $request){
        try{
            $empresa = new Empresas();
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->direccion_empresa = $request->direccion_empresa;
            $empresa->centro_costo = $request->centro_costo;
            $empresa->logo_empresa = $request->logo_empresa;
            $empresa->nif_empresa = $request->nif_empresa;
            $empresa-> save();
    
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

    public function listarEmpresas(){
        try{

            $empresa = Empresas::all();
    
            return response([
                "status" => 200,
                "data" => $empresa
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
        
    }

    public function deleteEmpresa($id){
        try{

            $empresa = Empresas::destroy($id);
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

    public function getEmpresaById($id)
    {
        try{
            $empresa = Empresas::where('id', $id)->first();
    
            return response([
                "status" => 1,
                "data" => $empresa
            ]);
        }
        catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }

    public function  actualizarEmpresa(Request $request){
            try{
                $empresa = Empresas::findOrfail($request->id);
                $empresa->nombre_empresa = $request->nombre_empresa;
                $empresa->direccion_empresa = $request->direccion_empresa;
                $empresa->centro_costo = $request->centro_costo;
                $empresa->logo_empresa = $request->logo_empresa;
                $empresa->nif_empresa = $request->nif_empresa;
                $empresa-> save();
        
                return response([
                    "status" => 200,
                    "msn" => 'Se ha actualizador satisfatoriamente'
                ]);
    
            }catch (Exception $e){
                return response([
                    "status" => 400,
                    "msn" => 'No se ha guadardo - error'
                ]);
            }
    }
}
