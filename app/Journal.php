<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_journal', 'date_journal'
    ];
}