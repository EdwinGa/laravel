<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeTacheCentre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_tache_centre', function(Blueprint $table) {
            $table->increments('id_lst_tache_centre');
            $table->foreign('id_tache')->references('id_tache')->on('tache_auto');
            $table->foreign('id_centre')->references('id_centre')->on('Centre_equestre');

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
