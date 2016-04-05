<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maladie
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_maladie', 'nom_maladie'
    ];
}