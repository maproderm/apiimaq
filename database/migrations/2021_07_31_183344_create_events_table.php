<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpd_events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('productor')->nullable();
            $table->string('artista')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('hotel')->nullable();
            $table->string('registro')->nullable();
            $table->dateTime('fecha_inicio')->nullable();
            $table->dateTime('fecha_fin')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('options')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('mpd_events');
    }
}
