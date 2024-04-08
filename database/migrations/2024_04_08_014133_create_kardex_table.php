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
        Schema::create('kardex', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_producto', 20);
            $table->dateTime('fecha');
            $table->string('concepto', 100);
            $table->string('comprobante', 100);
            $table->decimal('in_unidades', 8, 2);
            $table->decimal('in_costo_unitario', 8, 2);
            $table->decimal('in_costo_total', 8, 2);
            $table->decimal('out_unidades', 8, 2);
            $table->decimal('out_costo_unitario', 8, 2);
            $table->decimal('out_costo_total', 8, 2);
            $table->decimal('ex_unidades', 8, 2);
            $table->decimal('ex_costo_unitario', 8, 2);
            $table->decimal('ex_costo_total', 8, 2);
            $table->timestamps();

            $table->foreign('codigo_producto')->references('codigo_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kardex');
    }
};
