<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateJoueurTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('joueur',function(Blueprint $table){
            $table->increments("id");
            $table->string("pseudonyme");
            $table->string("email");
            $table->string("password");
            $table->string("prenom");
            $table->string("nom");
            $table->string("sexe");
            $table->date("date_naissance");
            $table->string("telephone")->nullable();
            $table->string("adresse")->nullable();
            $table->string("avatar")->nullable();
            $table->string("description")->nullable();
            $table->string("site_web")->nullable();
            $table->decimal("argent", 15, 2)->nullable();
            $table->string("adresse_ip")->nullable();
            $table->string("id_compte")->nullable();
            $table->enum("nb_monnaie", [""])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('joueur');
    }

}