<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parasite
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_parasite', 'nom_parasite'
    ];
}