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
            $table->string('codigo_producto', 20)->primary();
            $table->unsignedBigInteger('id_categoria_producto');
            $table->string('descripcion_producto');
            $table->decimal('precio_compra_producto', 8, 2);
            $table->decimal('precio_venta_producto', 8, 2);
            $table->decimal('precio_mayor_producto', 8, 2);
            $table->decimal('precio_oferta_producto', 8, 2);
            $table->integer('stock_producto');
            $table->integer('minimo_stock_producto');
            $table->integer('ventas_producto');
            $table->decimal('costo_total_producto', 8, 2);

            $table->foreign('id_categoria_producto')->references('id_categoria')->on('categorias');
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
