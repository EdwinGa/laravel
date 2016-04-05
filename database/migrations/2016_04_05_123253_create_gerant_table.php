<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGerantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gerant', function(Blueprint $table) {
            $table->increments('id_gerant');
            $table->integer('id_joueur')->unsigned();
            $table->foreign('id_joueur')->references('id_joueur')->on('Joueur');

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
