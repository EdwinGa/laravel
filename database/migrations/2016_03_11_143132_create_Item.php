<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Item', function(Blueprint $table) {
            $table->increments('id_item');
            $table->string('type',50);
            $table->string('niveau')->length(10);
            $table->string('description',50);
            $table->string('famille_items',50);
            $table->string('prix',50)->length(10);
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
