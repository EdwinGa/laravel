<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcour extends Migration
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
            $table->foreign('id_club')->references('id_club')->on('Hippique');
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
