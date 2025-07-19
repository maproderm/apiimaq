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
        Schema::create('mpd_sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('employee_id')->index();
            $table->foreign('employee_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('num_factura_web')->nullable();
            $table->string('num_order_web')->nullable();
            $table->string('num_order_ciberwin')->nullable();
            $table->tinyInteger('sale_in')->default(2)->comment('1:WhatsApp 2:Tienda en línea 3:Mercado Libre 4:Amazón 5:Walmart 6:TikTok 7:Liverpool 8:Sephora');
            $table->integer('items')->default(0);
            $table->float('subtotal')->nullable();
            $table->float('discount')->nullable();
            $table->decimal('shipping',10,2)->default(0);
            $table->float('total')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0:Borrador 1:Cotizacion 2:Por confirmar 3:Falta datos 4:Procesando 5:Listo para envio 6:Enviado 7:Cancelado');
            $table->tinyInteger('payment')->default(1)->comment('0:Pendiente de pago 1:Pagado');
            $table->tinyInteger('contact_client')->default(1)->comment('Contactado o no con el cliente');
            $table->datetime('delivery_date')->nullable()->comment('dia del envio');
            $table->string('num_tracking')->nullable()->comment('Número de guia');
            $table->string('shipping_package')->nullable()->comment('Paqueteria de envio');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mpd_sales');
    }
};
