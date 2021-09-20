<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
class MaterialController extends Controller
{
   public function index(){
       $materiales = Material::all();
       return view('materiales.index', compact('materiales'));       
   }
}
