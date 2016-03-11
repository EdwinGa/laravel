<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeItemCheval extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_item_cheval', function(Blueprint $table) {
            $table->increments('id_lst_item_cheval');
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');
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
