<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Actualite', function(Blueprint $table) {
            $table->increments('id_actualite');
            $table->foreign('id_joueur')->references('id_joueur')->on('Joueur');
            $table->foreign('id_journal')->references('id_journal')->on('Journal');

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
