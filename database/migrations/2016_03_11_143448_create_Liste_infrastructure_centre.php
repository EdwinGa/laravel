<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeInfrastructureCentre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_Infrastsrure_centre', function(Blueprint $table) {
            $table->increments('id_lst_hippique_infra');
            $table->foreign('id_centre')->references('id_centre')->on('Centre_equestre');
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
