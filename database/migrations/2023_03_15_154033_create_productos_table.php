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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('id_empresa');
            $table->string('sku');
            $table->string('descripcion');
            $table->string('modelo');
            $table->string('id_linea_producto');
            $table->string('id_marca');
            $table->string('serialisable');
            $table->string('sobresurtimiento');
            $table->string('serialisable_surtir');
            $table->string('caducidad');
            $table->string('caducidad1');
            $table->string('requiere_inspeccion_calidad');
            $table->string('requiere_fecha_cadu');
            $table->string('numero_parte');
            $table->string('requiere_lote');
            $table->string('lote_compuesto');
            $table->string('id_config_lote');
            $table->string('id_unidad_de_medida');
            $table->string('peso');
            $table->string('fecha_descontinuo');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
