<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infrastructure
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_infra', 'type', 'niveau','description','famille','prix','consommation','capacite_item','capacite_cheval'
    ];
}