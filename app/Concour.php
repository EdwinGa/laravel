<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concour
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_concour', 'id_club', 'date_debut','date_fin'
    ];
}