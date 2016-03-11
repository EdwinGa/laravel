<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeBlessureCheval extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_blessure_cheval', function(Blueprint $table) {
            $table->increments('id_lst_blessures');
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');
            $table->foreign('id_blessure')->references('id_blessure')->on('Blessure');

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
