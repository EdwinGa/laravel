<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blessure
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_blessure', 'nom_blessure'
    ];
}