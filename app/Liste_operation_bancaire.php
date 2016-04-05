<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_operation_bancaire
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_operation', 'nom_operation', 'id_joueur'
    ];
}