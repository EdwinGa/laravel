<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item
{
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'id_item', 'type', 'niveau','description','famille_items','prix'
];
}