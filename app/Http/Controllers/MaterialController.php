<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\MaterialStoreRequest;
use App\Models\Material;

class MaterialController extends Controller
{
   public function index(){
       $materiales = Material::orderBy('id','desc')->paginate();
       return view('materiales.index', compact('materiales'));       
   }

   public function create(){
        
        return view('materiales.create');
   }

   public function store(MaterialStoreRequest $request){

        $material = new Material();
        
        $material->nombre = $request->name; 
        $material->slug =  Str::slug($request->name);
        $material->unidad = $request->unidad;    
        $material->nombre_unidad = $request->nombre_unidad;    
        $material->descripcion = $request->descripcion;
        $material->foto = $request->foto;
        $material->precio_compra = $request->precio_compra;
        $material->precio_venta = $request->precio_venta;     
        $material->lugar_compra = $request->lugar_compra;   

        $material->save();
    
        return redirect()->route('materiales.show',$material);       
   }

   public function show(Material $material){       
       return view('materiales.show',compact('material'));
   }

   public function edit(Material $material){
    return view('materiales.edit',compact('material'));
   }

   public function update(Material $material, Request $request){
        
    $material->nombre = $request->name; 
    $material->slug =  Str::slug($request->name);
    $material->unidad = $request->unidad;    
    $material->nombre_unidad = $request->nombre_unidad;    
    $material->descripcion = $request->descripcion;
    $material->foto = $request->foto;
    $material->precio_compra = $request->precio_compra;
    $material->precio_venta = $request->precio_venta;     
    $material->lugar_compra = $request->lugar_compra;   
    $material->save();
    return view('materiales.show',compact('material'));
   }

   public function destroy(Material $material){
    $material->delete();
    return redirect()->route('materiales.index');
   }

   public function search(Request $request){
      $search = $request->filter;
      $materiales = Material::query()
      ->where('nombre','LIKE',"%{$search}%")
      ->orWhere('slug','LIKE',"%{$search}%")
      ->orWhere('unidad','LIKE',"%{$search}%")
      ->orWhere('nombre_unidad','LIKE',"%{$search}%")
      ->orWhere('descripcion','LIKE',"%{$search}%")
      ->orWhere('foto','LIKE',"%{$search}%")
      ->orWhere('lugar_compra','LIKE',"%{$search}%")
      ->paginate();

      return view('materiales.search', compact('materiales'));      
   }
}
