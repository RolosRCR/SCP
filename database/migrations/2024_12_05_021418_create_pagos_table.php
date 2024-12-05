<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago'); 
            $table->foreignId('id_cliente')->constrained('clientes', 'id_cliente');
            $table->decimal('pago', 10, 2); 
            $table->timestamp('fecha'); 
            $table->timestamps(0);  
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagos');
    }

};
