<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeInfrastructureCentreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_centre_infrastsrure', function(Blueprint $table) {
            $table->increments('id_lst_centre_infra');
            $table->integer('id_centre')->unsigned();
            $table->foreign('id_centre')->references('id_centre')->on('Centre_equestre');
            $table->integer('id_infra')->unsigned();
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
