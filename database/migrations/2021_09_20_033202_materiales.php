<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materiales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');    
            $table->string('slug');

            $table->string('unidad');
            $table->string('nombre_unidad');
            
            $table->text('descripcion');
            
            $table->text('foto');
            
            $table->decimal('precio_compra',10,4);
            $table->decimal('precio_venta',10,4);
            
            $table->string('lugar_compra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiales');
    }
}
