<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centre_equestre
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_ccentre', 'capacite', 'id_proprietaire','prix'
    ];
}