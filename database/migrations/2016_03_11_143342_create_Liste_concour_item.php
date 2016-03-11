<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeConcourItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_concour_item', function(Blueprint $table) {
            $table->increments('id_lst_cheval_tache');
            $table->foreign('id_concour')->references('id_concour')->on('Concour');
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
