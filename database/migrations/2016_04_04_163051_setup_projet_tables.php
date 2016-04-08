<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupProjetTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

Schema::create('Cheval', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_cheval');
            $table->string('nom',50);
            $table->string('race',50);
            $table->string('description',50);
            $table->integer('resistance')->length(10);
            $table->integer('endurance')->length(10);
            $table->integer('détente')->length(10);
            $table->integer('vitesse')->length(10);
            $table->integer('sociabilite')->length(10);
            $table->integer('intelligence')->length(10);
            $table->integer('temperament')->length(10);
            $table->integer('etat_sante')->length(10);
            $table->integer('etat_moral')->length(10);
            $table->integer('etat_stress')->length(10);
            $table->integer('etat_fatigue')->length(10);
            $table->integer('etat_faim')->length(10);
            $table->integer('etat_propete')->length(10);
            $table->integer('liste_items_cheval')->length(10);
            $table->integer('experience')->length(10);
            $table->integer('niveau')->length(10);
            $table->integer('etat_genral')->length(10);
        });

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

Schema::create('Gerant', function(Blueprint $table) {
            $table->increments('id_gerant');
            $table->integer('id_joueur')->unsigned();
            $table->foreign('id_joueur')->references('id_joueur')->on('Joueur');

        });

Schema::create('Journal', function(Blueprint $table) {
            $table->increments('id_journal');
            $table->dateTime('date_journal');

        });

Schema::create('Item', function(Blueprint $table) {
            $table->increments('id_item');
            $table->string('type',50);
            $table->string('niveau')->length(10);
            $table->string('description',50);
            $table->string('famille_items',50);
            $table->string('prix',50)->length(10);
        });

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

Schema::create('Concour', function(Blueprint $table) {
            $table->increments('id_concour');
            $table->integer('id_club')->unsigned();
            $table->foreign('id_club')->references('id_club')->on('Club');
            $table->date('date_debut');
            $table->date('date_fin');

        });

Schema::create('Club', function(Blueprint $table) {
            $table->increments('id_club');
            $table->integer('capacite')->length(10);
            $table->integer('id_gerant')->unsigned();
            $table->foreign('id_gerant')->references('id_gerant')->on('Gerant');

        });

Schema::create('Centre_equestre', function(Blueprint $table) {
            $table->increments('id_centre');
            $table->integer('capacite')->length(10);
            $table->integer('id_proprietaire')->unsigned();
            $table->foreign('id_proprietaire')->references('id_joueur')->on('Joueur');
            $table->float('prix');

        });

Schema::create('Actualite', function(Blueprint $table) {
            $table->increments('id_actualite');
            $table->integer('id_joueur')->unsigned();
            $table->foreign('id_joueur')->references('id_joueur')->on('Joueur');
            $table->integer('id_journal')->unsigned();
            $table->foreign('id_journal')->references('id_journal')->on('Journal');

        });

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

Schema::create('Blessure', function(Blueprint $table) {
            $table->increments('id_blessure');
            $table->string('nom_blessure',50);
        });

Schema::create('Parasite', function(Blueprint $table) {
            $table->increments('id_parasite');
            $table->string('nom_parasite',50);
        });

Schema::create('Maladie', function(Blueprint $table) {
            $table->increments('id_maladie');
            $table->string('nom_maladie',50);
        });

Schema::create('Liste_blessure_cheval', function(Blueprint $table) {
            $table->increments('id_lst_blessure');
            $table->integer('id_cheval')->unsigned();
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');
            $table->integer('id_blessure')->unsigned();
            $table->foreign('id_blessure')->references('id_blessure')->on('Blessure');

        });

Schema::create('Tache_auto', function(Blueprint $table) {
            $table->increments('id_tache');
            $table->string('action',50);
            $table->integer('frequence')->length(10);
            $table->date('date_debut_tache');
            $table->date('date_fin_tache');
        });

Schema::create('Liste_parasite_cheval', function(Blueprint $table) {
            $table->increments('id_lst_parasite_cheval');
            $table->integer('id_cheval')->unsigned();
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');
            $table->integer('id_parasite')->unsigned();
            $table->foreign('id_parasite')->references('id_parasite')->on('Parasite');

        });

Schema::create('Liste_maladie_cheval', function(Blueprint $table) {
            $table->increments('id_lst_maladie_cheval');
            $table->integer('id_cheval')->unsigned();
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');
            $table->integer('id_maladie')->unsigned();
            $table->foreign('id_maladie')->references('id_maladie')->on('Maladie');

        });

Schema::create('Liste_tache_infrastructure', function(Blueprint $table) {
            $table->increments('id_lst_item_infra');
            $table->integer('id_infra')->unsigned();
            $table->foreign('id_infra')->references('id_infra')->on('Infrastructure');
            $table->integer('id_tache')->unsigned();
            $table->foreign('id_tache')->references('id_tache')->on('Tache_auto');

        });

Schema::create('Liste_tache_centre', function(Blueprint $table) {
            $table->increments('id_lst_tache_centre');
            $table->integer('id_tache')->unsigned();
            $table->foreign('id_tache')->references('id_tache')->on('Tache_auto');
            $table->integer('id_centre')->unsigned();
            $table->foreign('id_centre')->references('id_centre')->on('Centre_equestre');

        });

Schema::create('Liste_cheval_tache', function(Blueprint $table) {
            $table->increments('id_lst_cheval_tache');
            $table->integer('id_cheval')->unsigned();
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');
            $table->integer('id_tache')->unsigned();
            $table->foreign('id_tache')->references('id_tache')->on('Tache_auto');

        });

Schema::create('Liste_operation_banquaire', function(Blueprint $table) {
            $table->increments('id_lst_operations');
            $table->string('nom_operation');
            $table->integer('id_centre')->unsigned();
            $table->foreign('id_centre')->references('id_centre')->on('Centre_equestre');

        });

Schema::create('Liste_joueur_tache', function(Blueprint $table) {
            $table->increments('id_lst_joueur_tache');
            $table->integer('id_joueur')->unsigned();
            $table->foreign('id_joueur')->references('id_joueur')->on('Joueur');
            $table->integer('id_tache')->unsigned();
            $table->foreign('id_tache')->references('id_tache')->on('Tache_auto');

        });

Schema::create('Liste_joueur_cheval', function(Blueprint $table) {
            $table->increments('id_lst_joueur_cheval');
            $table->integer('id_joueur')->unsigned();
            $table->foreign('id_joueur')->references('id_joueur')->on('Joueur');
            $table->integer('id_cheval')->unsigned();
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');

        });

Schema::create('Liste_joueur_item', function(Blueprint $table) {
            $table->increments('id_lst_joueur_item');
            $table->integer('id_joueur')->unsigned();
            $table->foreign('id_joueur')->references('id_joueur')->on('Joueur');
            $table->integer('id_item')->unsigned();
            $table->foreign('id_item')->references('id_item')->on('Item');

        });

Schema::create('Liste_centre_infrastsrure', function(Blueprint $table) {
            $table->increments('id_lst_centre_infra');
            $table->integer('id_centre')->unsigned();
            $table->foreign('id_centre')->references('id_centre')->on('Centre_equestre');
            $table->integer('id_infra')->unsigned();
            $table->foreign('id_infra')->references('id_infra')->on('Infrastructure');

        });

Schema::create('Liste_concour_item', function(Blueprint $table) {
            $table->increments('id_lst_concour_item');
            $table->integer('id_concour')->unsigned();
            $table->foreign('id_concour')->references('id_concour')->on('Concour');
            $table->integer('id_item')->unsigned();
            $table->foreign('id_item')->references('id_item')->on('Item');

        });

Schema::create('Liste_club_infrastructure', function(Blueprint $table) {
            $table->increments('id_lst_club_infra');
            $table->integer('id_club')->unsigned();
            $table->foreign('id_club')->references('id_club')->on('Club');
            $table->integer('id_infra')->unsigned();
            $table->foreign('id_infra')->references('id_infra')->on('Infrastructure');

        });

Schema::create('Liste_item_cheval', function(Blueprint $table) {
            $table->increments('id_lst_item_cheval');
            $table->integer('id_cheval')->unsigned();
            $table->foreign('id_cheval')->references('id_cheval')->on('Cheval');
            $table->integer('id_item')->unsigned();
            $table->foreign('id_item')->references('id_item')->on('Item');

        });

Schema::create('Liste_item_infrastructure', function(Blueprint $table) {
            $table->increments('id_lst_item_infra');
            $table->integer('id_infra')->unsigned();
            $table->foreign('id_infra')->references('id_infra')->on('Infrastructure');
            $table->integer('id_item')->unsigned();
            $table->foreign('id_item')->references('id_item')->on('Item');

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
