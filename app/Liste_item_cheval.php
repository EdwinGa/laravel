<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_item_cheval
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_lst_item_cheval', 'id_item', 'id_cheval'
    ];
}