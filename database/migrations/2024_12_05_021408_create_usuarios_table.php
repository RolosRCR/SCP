<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');  
            $table->integer('rol'); 
            $table->string('contrasena'); 
            $table->timestamps(0); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }

};