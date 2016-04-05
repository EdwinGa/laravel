<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeClubInfrastructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_club_infrastructure', function(Blueprint $table) {
            $table->increments('id_lst_club_infra');
            $table->integer('id_club')->unsigned();
            $table->foreign('id_club')->references('id_club')->on('Club');
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
