<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Concour', function(Blueprint $table) {
            $table->increments('id_concour');
            $table->integer('id_club')->unsigned();
            $table->foreign('id_club')->references('id_club')->on('Club');
            $table->date('date_debut');
            $table->date('date_fin');

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
