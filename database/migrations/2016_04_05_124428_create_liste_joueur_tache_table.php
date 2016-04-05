<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeJoueurTacheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_joueur_tache', function(Blueprint $table) {
            $table->increments('id_lst_joueur_tache');
            $table->integer('id_joueur')->unsigned();
            $table->foreign('id_joueur')->references('id_joueur')->on('Joueur');
            $table->integer('id_tache')->unsigned();
            $table->foreign('id_tache')->references('id_tache')->on('Tache_auto');

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
