<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;
    protected $table = 'cotizaciones';

    // relacion de 1 a muchos (inverso)
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }

}
