<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeParasiteCheval extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_parasite_cheval', function(Blueprint $table) {
            $table->increments('id_lst_parasite_cheval');
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');
            $table->foreign('id_parasite')->references('id_parasite')->on('Parasite');

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
