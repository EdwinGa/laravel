<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_maladie_cheval
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_maladie_cheval', 'id_maladie', 'id_cheval'
    ];
}