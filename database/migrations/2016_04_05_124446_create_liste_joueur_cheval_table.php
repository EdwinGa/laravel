<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeJoueurChevalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_joueur_cheval', function(Blueprint $table) {
            $table->increments('id_lst_joueur_cheval');
            $table->integer('id_joueur')->unsigned();
            $table->foreign('id_joueur')->references('id_joueur')->on('Joueur');
            $table->integer('id_cheval')->unsigned();
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');

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
