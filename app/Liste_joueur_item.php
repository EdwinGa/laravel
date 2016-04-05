<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_joueur_item
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_joueur_item', 'id_joueur', 'id_item'
    ];
}