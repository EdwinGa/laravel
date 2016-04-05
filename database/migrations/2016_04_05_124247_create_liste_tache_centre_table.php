<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeTacheCentreTable extends Migration
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
            $table->integer('id_tache')->unsigned();
            $table->foreign('id_tache')->references('id_tache')->on('Tache_auto');
            $table->integer('id_centre')->unsigned();
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
