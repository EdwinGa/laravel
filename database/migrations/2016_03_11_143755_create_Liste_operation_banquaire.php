<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeOperationBanquaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_operation_bnaquaire', function(Blueprint $table) {
            $table->increments('id_lst_operations');
            $table->string('nom_operation');
            $table->foreign('id_centre')->references('id_centre')->on('Centre_equestre');

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
