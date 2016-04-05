<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_joueur_cheval
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_joueur_cheval', 'id_joueur', 'id_cheval'
    ];
}