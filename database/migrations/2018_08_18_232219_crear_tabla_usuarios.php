<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration{
 
  public function up(){
    Schema::create('personas', function (Blueprint $table) {
      $table->string('dni', 8);
      $table->primary('dni');
      $table->string('nombres');
      $table->string('apellidos');
    });

    Schema::create('usuarios', function (Blueprint $table) {
      $table->increments('id');
      $table->string('persona_dni', 8);
      $table->foreign('persona_dni')->on('personas')->references('dni')
        ->onUpdate('cascade')->onDelete('cascade');
      $table->string('password');
      $table->rememberToken();
    });
  }

  public function down(){
    Schema::dropIfExists('personas');
    Schema::dropIfExists('usuarios');
  }
}
