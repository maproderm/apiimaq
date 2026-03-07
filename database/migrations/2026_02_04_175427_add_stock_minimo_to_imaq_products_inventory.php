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
        Schema::table('imaq_products_inventory', function (Blueprint $table) {
            //
        });

        Schema::table('imaq_products_inventory', function (Blueprint $table) {
            $table->decimal('stock_minimo', 12, 2)->default(0)->after('status');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('imaq_products_inventory', function (Blueprint $table) {
            //
        });
    }
};
