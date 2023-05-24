<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movimiento_entre_almacens', function (Blueprint $table) {
            $table->id();
            $table->integer('id_almacen_origen');
            $table->integer('id_almacen_destino');
            $table->integer('id_empresa');
            $table->integer('id_producto');
            $table->string('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimiento_entre_almacens');
    }
};
