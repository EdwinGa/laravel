<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club_hippique
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_club', 'capacite', 'id_gerant','ic_concours'
    ];
}