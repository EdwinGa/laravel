<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_item_infrastructure
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_item_infra', 'id_item', 'id_infra'
    ];
}