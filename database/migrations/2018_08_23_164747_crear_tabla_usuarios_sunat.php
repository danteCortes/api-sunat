<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuariosSunat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_sunat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ruc', 11);
            $table->string('razon_social');
            $table->string('estado');
            $table->string('condicion_domicilio');
            $table->string('ubigeo');
            $table->string('tipo_via');
            $table->string('nombre_via');
            $table->string('zona');
            $table->string('tipo_zona');
            $table->string('numero');
            $table->string('interior');
            $table->string('lote');
            $table->string('departamento');
            $table->string('manzana');
            $table->string('kilometro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_sunat');
    }
}
