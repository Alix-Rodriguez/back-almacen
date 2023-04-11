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
            $table->string('titulo');
            $table->string('sku');
            $table->integer('id_proveedores');
            $table->string('descripcion');
            $table->string('modelo');
            $table->string('linea');
            $table->string('marca');
            $table->integer('cantidad');
            $table->integer('costo');
            $table->integer('id_marca');
            $table->integer('id_almacen');
            $table->integer('serialisable');
            $table->integer('caducidad');
            $table->integer('sobresurtimiento');
            $table->integer('status');
            $table->integer('numero_parte');
            $table->integer('qa');
            $table->integer('serialisable_recepcion');
            $table->string('sku_compuesto');
            $table->integer('lote_compuesto');
            $table->integer('id_config_lote');
            $table->integer('requiere_lote');
            $table->integer('requiere_fecha_cadu');
            $table->integer('id_linea');
            $table->string('codigo_barra');
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
