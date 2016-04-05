<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste_blessure_cheval
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_blessure_cheval', 'id_blessure', 'id_cheval'
    ];
}