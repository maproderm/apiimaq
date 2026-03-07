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
        Schema::create('imaq_products_inventory', function (Blueprint $table) {

            $table->id();
            $table->string('clave');
            $table->string('name');
            $table->foreignId('division_id')->constrained('imaq_division')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('category_id')->constrained('imaq_categories')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('unit_of_measurement_id')->constrained('imaq_unit_of_measurement')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('type_of_material_id')->constrained('imaq_type_of_material')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('size_id')->constrained('imaq_size')->cascadeOnUpdate()->restrictOnDelete();
            $table->text('description_product_almacen_imaq')->nullable();
            $table->boolean('status')->default(1)->comment('0:En Revision 1:Activo 2:Rechazado 3:Inactivo');
            $table->softDeletes();
            $table->timestamps();

            // 🔑 MISMO PRODUCTO PUEDE EXISTIR EN VARIOS ALMACENES
            $table->unique(['clave', 'division_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imaq_products_inventory');
    }
};
