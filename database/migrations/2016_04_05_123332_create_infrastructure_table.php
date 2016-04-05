<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfrastructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Infrastructure', function(Blueprint $table) {
            $table->increments('id_infra');
            $table->integer('type')->length(10);
            $table->integer('niveau')->length(10);
            $table->string('description',50);
            $table->string('famille',50);
            $table->integer('consommation')->length(10);
            $table->integer('capacite_items')->length(10);
            $table->integer('capacite_chevaux')->length(10);

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
