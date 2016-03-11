<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeHippiqueInfrastructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_hippique_infrastructure', function(Blueprint $table) {
            $table->increments('id_lst_hippique_infrastructure');
            $table->foreign('id_club')->references('id_club')->on('Hippique');
            $table->foreign('id_infra')->references('id_infra')->on('Infrastructure');

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
