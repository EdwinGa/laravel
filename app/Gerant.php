<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gerant
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_gerand', 'id_joueur'
    ];
}