<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_cheval_taches
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_cheval_tache', 'id_cheval', 'id_tache'
    ];
}