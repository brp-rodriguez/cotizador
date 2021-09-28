<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::orderBy('id','desc')->paginate();
        return view('productos.index',compact('productos'));               
    }

    public function create(){
        
        return view('productos.create');
   }

   public function store(Request $request){

        $producto = new Producto();        
        $producto->nombre = $request->name;
        $producto->slug =  Str::slug($request->name);
        $producto->descripcion = $request->descripcion;
        $producto->tipo = $request->tipo;
        $producto->precio_venta_sin_igv =  $request->precio_venta_sin_igv;
        $producto->precio_venta_con_igv=  $request->precio_venta_sin_igv*1.18;
        
        $producto->save();                
    
        return redirect()->route('productos.show',$producto);       
   }

   public function show(Producto $producto){       
       return view('productos.show',compact('producto'));
   }

   public function edit(Producto $producto){
    return view('productos.edit',compact('producto'));
   }

   public function update(Producto $producto, Request $request){
        
    /*$material->nombre = $request->name; 
    $material->slug =  Str::slug($request->name);
    $material->unidad = $request->unidad;    
    $material->nombre_unidad = $request->nombre_unidad;    
    $material->descripcion = $request->descripcion;
    $material->foto = $request->foto;
    $material->precio_compra = $request->precio_compra;
    $material->precio_venta = $request->precio_venta;     
    $material->lugar_compra = $request->lugar_compra;   
    $material->save();*/
    return view('productos.show',compact('producto'));
   }

   public function destroy(Producto $producto){
    $producto->delete();
    return redirect()->route('productos.index');
   }

   public function search(Request $request){
      $search = $request->filter;
      
      
      $productos = Producto::query()
          ->where('nombre','LIKE',"%{$search}%")
          ->orWhere('descripcion','LIKE',"%{$search}%")          
          ->paginate();        
     
      return view('productos.search', compact('productos'));
   }
}
