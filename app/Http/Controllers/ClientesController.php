<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function get_ruc(Request $request){
        
        return
        $cliente_by_id = Cliente::find($request->cliente_id);                
        return response()->json($cliente_by_id);

    }
    public function index(){
        $clientes = Cliente::all();
        return view('clientes.index',compact('clientes'));
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        
        $cliente = new Cliente();
        $cliente->razon_social = $request->razon_social; 
        $cliente->nombre_corto = $request->nombre_corto; 
        $cliente->ruc = $request->ruc; 
        $cliente->contacto_nombre = $request->contacto_nombre; 
        $cliente->contacto_celular = $request->contacto_celular;
        $cliente->contacto_correo= $request->contacto_correo;
        $cliente->info_extra= $request->info_extra;
        $cliente->save();
        return redirect()->route('clientes.show',$cliente);
    }


    public function show(Cliente $cliente){       
        return view('clientes.show',compact('cliente'));
    }
 
    public function edit(Cliente $cliente){
        return view('clientes.edit',compact('cliente'));
    }
 
    public function update(Cliente $cliente, Request $request){
        
        return view('clientes.show',compact('cliente'));        
    }
 
    public function destroy(Cliente $cliente){
     $cliente->delete();
     return redirect()->route('clientes.index');
    }
 
    public function search(Request $request){
       $search = $request->filter;
              
       $clientes = Cliente::query()
           ->where('razo_social','LIKE',"%{$search}%")
           ->orWhere('nombre_corto','LIKE',"%{$search}%")
           ->orWhere('ruc','LIKE',"%{$search}%")
           ->orWhere('contacto_nombre','LIKE',"%{$search}%")
           ->orWhere('contacto_correo','LIKE',"%{$search}%")
           ->paginate();        
      
       return view('clientes.search', compact('clientes'));
    }
  
}
