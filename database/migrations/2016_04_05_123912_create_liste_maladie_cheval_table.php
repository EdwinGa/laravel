<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeMaladieChevalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_maladie_cheval', function(Blueprint $table) {
            $table->increments('id_lst_maladie_cheval');
            $table->integer('id_cheval')->unsigned();
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');
            $table->integer('id_maladie')->unsigned();
            $table->foreign('id_maladie')->references('id_maladie')->on('Maladie');

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
