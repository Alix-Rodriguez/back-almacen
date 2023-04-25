<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Exception;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function saveCliente(Request $request){
    
        try{
            $cliente = new Clientes();
            $cliente -> nombre = $request->nombre;
            $cliente -> nif = $request->nif;
            $cliente -> direccion = $request->direccion;
            $cliente -> pais = $request->pais;
            $cliente -> ciudad = $request->ciudad;
            $cliente -> telefono = $request->telefono;
            $cliente -> telefono_opcional = $request->telefono_opcional;
            $cliente -> contribuyente = $request->contribuyente;
            $cliente -> save();
            
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
    public function listarCliente(){
        try{

            $cliente = Clientes::all();
    
            return response([
                "status" => 200,
                "data" => $cliente
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
        
    }

    public function deleteCliente($id){
        try{

            $empresa = Clientes::destroy($id);
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

    public function getClienteById($id)
    {
        try{
            $cliente = Clientes::where('id', $id)->first();
    
            return response([
                "status" => 1,
                "data" => $cliente
            ]);
        }
        catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }

    public function  actualizarCliente(Request $request){
            try{
                $cliente = Clientes::findOrfail($request->id);
                $cliente -> nombre = $request->nombre;
            $cliente -> nif = $request->nif;
            $cliente -> direccion = $request->direccion;
            $cliente -> pais = $request->pais;
            $cliente -> ciudad = $request->ciudad;
            $cliente -> telefono = $request->telefono;
            $cliente -> telefono_opcional = $request->telefono_opcional;
            $cliente -> contribuyente = $request->contribuyente;
            $cliente -> save();
        
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
