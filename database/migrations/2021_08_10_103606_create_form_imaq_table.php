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
        Schema::create('imaq_form_quotation', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');

            $table->unsignedBigInteger('service_id')->index();
            $table->foreign('service_id')->references('id')->on('imaq_form_services')->onDelete('cascade');

            $table->unsignedBigInteger('line_id')->index();
            $table->foreign('line_id')->references('id')->on('imaq_form_lines')->onDelete('cascade');
            $table->text('message');
            $table->bigInteger('quantity')->nullable();
            $table->string('hour');

            $table->unsignedBigInteger('state_id')->index();
            $table->foreign('state_id')->references('id')->on('list_states')->onDelete('cascade');

            // $table->foreign('states_id')->references('id')->on('list_states');
            

            $table->string('form_city');

            $table->tinyInteger('status')->default(0)->comment('0:Pendiente por atender 1:Atendido');
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
        Schema::dropIfExists('imaq_form_quotation');
    }
};
