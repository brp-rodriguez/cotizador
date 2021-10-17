<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';

    // relacion de 1 a muchos
    public function cotizaciones(){
        return $this->hasMany('App\Models\Cotizacioncotiz');
    }


}

