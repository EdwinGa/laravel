<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeTacheInfrastructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_tache_infrastructure', function(Blueprint $table) {
            $table->increments('id_lst_item_infra');
            $table->integer('id_infra')->unsigned();
            $table->foreign('id_infra')->references('id_infra')->on('Infrastructure');
            $table->integer('id_tache')->unsigned();
            $table->foreign('id_tache')->references('id_tache')->on('Tache_auto');

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
