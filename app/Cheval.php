<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheval
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_cheval', 'id_propietaire', 'nom','race','description','resistance','endurance','détente','vitesse','sociabilite','intelligence','temperament','etat_sante','etat_moral','etat_stress','etat_fatigue','etat_faim','etat_propete','liste_item_cheval','experience','niveau','etat_general'
    ];
}

