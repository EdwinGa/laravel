<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeChevalTache extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_cheval_tache', function(Blueprint $table) {
            $table->increments('id_lst_cheval_tache');
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');
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
