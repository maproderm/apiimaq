<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('key', 3);
            $table->string('name',50);
            // $table->integer('state_id')->unsigned();

            // $table->foreign('state_id')->references('id')->on('list_states');

            $table->unsignedBigInteger('state_id')->index();
            $table->foreign('state_id')->references('id')->on('list_states')->onDelete('cascade');

            $table->tinyInteger('active')->default(1);
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
        Schema::dropIfExists('list_municipalities');
    }
}
