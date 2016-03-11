<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joueur
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_joueur', 'pseudonyme', 'email','password','prenom','nom','sexe','date_naissance','telephone','adresse','avatar','description','site_web','argent','adresse_ip','date_inscription','date_deniere_connexion','id_compte','nb_monnaie'
    ];
}

