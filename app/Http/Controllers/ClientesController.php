<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        //$clientes = Clientes::all();
        return view('clientes.index');
    }
}
