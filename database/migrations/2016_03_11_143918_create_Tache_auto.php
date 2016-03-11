<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacheAuto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tache_auto', function(Blueprint $table) {
            $table->increments('id_tache');
            $table->string('action',50);
            $table->integer('frequence')->length(10);
            $table->date('date_debut_tache');
            $table->date('date_fin_tache');
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
