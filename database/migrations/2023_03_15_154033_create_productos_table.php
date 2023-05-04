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
            $table->integer('id_empresa')-> nullable();
            $table->string('sku');
            $table->string('descripcion');
            $table->string('modelo');
            $table->integer('id_linea_producto');
            $table->integer('id_marca');
            $table->integer('serialisable');
            $table->integer('caducidad');
            $table->integer('sobresurtimiento');
            $table->integer('serialisable_surtir');
            $table->integer('requiere_inspeccion_calidad');
            $table->integer('requiere_fecha_cadu');
            $table->integer('numero_parte');
            $table->integer('requiere_lote');
            $table->integer('lote_compuesto');
            $table->integer('id_config_lote');
            $table->integer('id_unidad_de_medida');
            $table->integer('peso');
            $table->date('fecha_descontinuo');
            $table->integer('status');
            $table->string('sku_compuesto');
            $table->string('sku_proveedores');
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
