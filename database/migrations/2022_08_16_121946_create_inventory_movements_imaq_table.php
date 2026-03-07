<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imaq_inventory_movements', function (Blueprint $table) {
            $table->id();

            // Producto
            $table->foreignId('product_inventory_id')->constrained('imaq_products_inventory')->cascadeOnUpdate()->restrictOnDelete();

            // Almacén (IMAQ 1, IMAQ 2, etc.)
            $table->foreignId('division_id')->constrained('imaq_division')->cascadeOnUpdate()->restrictOnDelete();

            // Tipo de movimiento
            // in = entrada
            // out = salida
            // transfer = transferencia
            $table->enum('type', ['in', 'out', 'transfer']);

            // Cantidad
            $table->decimal('quantity', 12, 2);

            // Observaciones opcionales
            $table->string('description')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Índices útiles
            $table->index(['product_inventory_id', 'division_id']);
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('imaq_inventory_movements');
    }
};
