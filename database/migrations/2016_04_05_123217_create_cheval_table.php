<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChevalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cheval', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_cheval');
            $table->string('nom',50);
            $table->string('race',50);
            $table->string('description',50);
            $table->integer('resistance')->length(10);
            $table->integer('endurance')->length(10);
            $table->integer('détente')->length(10);
            $table->integer('vitesse')->length(10);
            $table->integer('sociabilite')->length(10);
            $table->integer('intelligence')->length(10);
            $table->integer('temperament')->length(10);
            $table->integer('etat_sante')->length(10);
            $table->integer('etat_moral')->length(10);
            $table->integer('etat_stress')->length(10);
            $table->integer('etat_fatigue')->length(10);
            $table->integer('etat_faim')->length(10);
            $table->integer('etat_propete')->length(10);
            $table->integer('liste_items_cheval')->length(10);
            $table->integer('experience')->length(10);
            $table->integer('niveau')->length(10);
            $table->integer('etat_genral')->length(10);
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
