<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_centre_infrastructure
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_centre_infra', 'id_centre', 'id_infra'
    ];
}