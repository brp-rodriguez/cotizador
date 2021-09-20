<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_comercial');
            $table->string('nombre_corto');
            $table->string('ruc');
            $table->string('direccion');
            $table->string('descripcion_horario');
            $table->string('descripcion_forma_envio');
            $table->string('telefono_1');
            $table->string('telefono_2');
            $table->string('telefono_3');
            $table->string('celular_1');
            $table->string('celular_2');
            $table->string('celular_3');

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
        Schema::dropIfExists('proveedores');
    }
}
