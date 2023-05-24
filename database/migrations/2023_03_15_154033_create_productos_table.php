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
            $table->integer('id_empresa');
            $table->string('sku');
            $table->string('descripcion');
            $table->string('modelo');
            $table->integer('id_linea_producto');
            $table->integer('id_marca');
            $table->string('serialisable');
            $table->string('caducidad')->nullable();
            $table->string('sobresurtimiento');
            $table->string('serialisable_surtir');
            $table->string('requiere_inspeccion_calidad')->nullable();
            $table->string('requiere_fecha_cadu')->nullable();
            $table->string('numero_parte');
            $table->string('requiere_lote')->nullable();
            // $table->integer('lote_compuesto')->nullable();
            $table->integer('id_config_lote')->nullable();
            $table->integer('id_unidad_de_medida');
            $table->string('peso');
            $table->date('fecha_descontinuo');
            $table->string('status');
            $table->string('kitting')->nullable();
            // $table->string('sku_proveedores');
            $table->integer('id_layout');
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
