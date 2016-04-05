<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_club_infrastructure
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_club_infra', 'id_club', 'id_infra'
    ];
}