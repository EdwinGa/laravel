<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoueurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Joueur', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_joueur');
            $table->string('pseudonyme',50);
            $table->string('email',50);
            $table->string('password',50);
            $table->string('prenom',50)->length(10);
            $table->string('nom',50)->length(10);
            $table->tinyInteger('sexe')->length(5);
            $table->date('date_naissance');
            $table->string('telephone',25);
            $table->string('adresse',50);
            $table->string('avatar',50);
            $table->string('description',50);
            $table->string('site_web',50);
            $table->integer('argent')->length(10);
            $table->integer('adresse_ip')->length(10);
            $table->dateTime('date_inscription');
            $table->dateTime('date_deniere_connexion');
            $table->integer('id_compte')->length(10);
            $table->integer('nb_monnaie')->length(10);
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
