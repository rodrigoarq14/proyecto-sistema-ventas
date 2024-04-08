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
        Schema::create('venta_detalle', function (Blueprint $table) {
            $table->id();
            $table->string('nro_boleta', 8);
            $table->string('codigo_producto', 20);
            $table->integer('cantidad');
            $table->decimal('costo_unitario_venta', 8, 2);
            $table->decimal('precio_unitario_venta', 8, 2);
            $table->timestamps();

            $table->foreign('nro_boleta')->references('nro_boleta')->on('venta_cabecera');
            $table->foreign('codigo_producto')->references('codigo_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_detalle');
    }
};
