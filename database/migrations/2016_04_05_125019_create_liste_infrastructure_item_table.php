<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeInfrastructureItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_item_infrastructure', function(Blueprint $table) {
            $table->increments('id_lst_item_infra');
            $table->integer('id_infra')->unsigned();
            $table->foreign('id_infra')->references('id_infra')->on('Infrastructure');
            $table->integer('id_item')->unsigned();
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
