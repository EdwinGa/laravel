<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_tache_centre
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_parasite_cheval', 'id_parasite', 'id_cheval'
    ];
}