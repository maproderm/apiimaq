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
        Schema::create('mpd_client_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('address');
            $table->date('birthday')->nullable();
            $table->string('city');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('facebook')->nullable();
            $table->string('occupation')->nullable();
            $table->unsignedBigInteger('municipaly_id')->nullable()->index();
            $table->foreign('municipaly_id')->references('id')->on('list_municipalities')->onDelete('cascade');
            $table->unsignedBigInteger('event_id')->nullable()->index();
            $table->foreign('event_id')->references('id')->on('mpd_events')->onDelete('cascade');
            $table->string('gender')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('locality')->nullable();
            $table->string('orders')->nullable();
            $table->float('gasto_total')->nullable();
            $table->float('vmp')->nullable();
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
        Schema::dropIfExists('mpd_client_information');
    }
};
