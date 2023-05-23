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
        Schema::create('movimiento_internos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_empresa');
            $table->integer('id_almacen');
            $table->integer('id_producto');
            $table->string('cantidad');
            $table->integer('id_rack');
            $table->integer('id_localidad');
            $table->integer('id_nivel');
            $table->integer('id_zona');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimiento_internos');
    }
};
