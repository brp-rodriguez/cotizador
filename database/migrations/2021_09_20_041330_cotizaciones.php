<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cotizaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('serie_extension');
            $table->string('forma_pago');
            $table->string('observacion');
            $table->string('validez_oferta');


            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')
                    ->references('id')->on('clientes')
                    ->onDelete('set null');

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
        Schema::dropIfExists('cotizaciones');
    }
}
