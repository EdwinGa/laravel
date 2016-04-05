<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_concour_item
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_item_concour', 'id_item', 'id_concour'
    ];
}