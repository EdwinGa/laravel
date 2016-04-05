<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_actualite', 'id_joueur','id_journal'
    ];
}