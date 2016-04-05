<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeConcourItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_concour_item', function(Blueprint $table) {
            $table->increments('id_lst_concour_item');
            $table->integer('id_concour')->unsigned();
            $table->foreign('id_concour')->references('id_concour')->on('Concour');
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
