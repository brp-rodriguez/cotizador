<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Material;
class MaterialController extends Controller
{
   public function index(){
       $materiales = Material::paginate();
       return view('materiales.index', compact('materiales'));       
   }

   public function create(){
        
        return view('materiales.create');
   }

   public function store(Request $request){
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
       return $material;
   }
}
