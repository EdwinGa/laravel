<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHippique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hippique', function(Blueprint $table) {
            $table->increments('id_club');
            $table->integer('capacite')->length(10);
            $table->foreign('id_gerant')->references('id_gerant')->on('Gerant');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
