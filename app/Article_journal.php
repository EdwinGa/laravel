<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_journal
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_article', 'titre_article','description_article','date_article','img_article','type_article','id_journal'
    ];
}