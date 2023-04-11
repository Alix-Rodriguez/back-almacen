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
        Schema::create('producto_configs', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('fecha_descontinuado');
            $table->string('numero_caducida');
            $table->string('etiqueta_salida');
            $table->string('id_umedida');
            $table->string('peso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_configs');
    }
};
