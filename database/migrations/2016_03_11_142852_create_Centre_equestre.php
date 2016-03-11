<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentreEquestre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Centre_equestre', function(Blueprint $table) {
            $table->increments('id_centre_equestre');
            $table->integer('capacite')->length(10);
            $table->foreign('id_proprietaire')->references('id_joueur')->on('Joueur');
            $table->float('prix');

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
