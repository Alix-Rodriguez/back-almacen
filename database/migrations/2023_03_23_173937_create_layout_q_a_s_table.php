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
        Schema::create('layout_q_a_s', function (Blueprint $table) {
            $table->id();
            $table->integer('id_zonaqa')->nullable();
            $table->integer('id_rackqa')->nullable();
            $table->integer('id_nivelqa')->nullable();
            $table->integer('id_localidadqa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layout_q_a_s');
    }
};
