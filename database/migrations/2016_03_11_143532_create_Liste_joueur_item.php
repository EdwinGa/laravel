<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeJoueurItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_joueur_item', function(Blueprint $table) {
            $table->increments('id_lst_joueur_item');
            $table->foreign('id_joueur')->references('id_joueur')->on('Joueur');
            $table->foreign('id_item')->references('id_item')->on('Item');

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
