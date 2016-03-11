<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeItemInfrastructure extends Migration
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
            $table->foreign('id_infra')->references('id_infra')->on('Infrastructure');
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
