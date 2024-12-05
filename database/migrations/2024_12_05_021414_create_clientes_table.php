<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente'); 
            $table->string('nombre'); 
            $table->decimal('monto', 10, 2); 
            $table->integer('dia'); 
            $table->timestamps(0);  
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }

};
