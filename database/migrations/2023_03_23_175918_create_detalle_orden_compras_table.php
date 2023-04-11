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
        Schema::create('detalle_orden_compras', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ocompra');
            $table->integer('id_producto');
            $table->string('descricpion');
            $table->integer('cantidad');
            $table->integer('precio');
            $table->integer('total');
            $table->integer('sku');
            $table->integer('num_lote');
            $table->integer('unidad_medida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_orden_compras');
    }
};
