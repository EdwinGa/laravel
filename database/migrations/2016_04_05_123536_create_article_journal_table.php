<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleJournalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Article_journal', function(Blueprint $table) {
            $table->increments('id_article');
            $table->string('titre_article',50);
            $table->string('description_article',50);
            $table->dateTime('date_article');
            $table->string('img_article',50);
            $table->string('type_article',50);
            $table->integer('id_journal')->unsigned();
            $table->foreign('id_journal')->references('id_journal')->on('Journal');

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
