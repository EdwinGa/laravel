<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_joueur_tache
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_joueur_tache', 'id_joueur', 'id_tache'
    ];
}