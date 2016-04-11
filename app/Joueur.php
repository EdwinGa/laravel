<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use Illuminate\Support\Facades\Hash; 

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

class Joueur extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'joueur';
    
    protected $fillable = [
          'pseudonyme',
          'email',
          'password',
          'prenom',
          'nom',
          'sexe',
          'date_naissance',
          'telephone',
          'adresse',
          'avatar',
          'description',
          'site_web',
          'argent',
          'adresse_ip',
          'id_compte',
          'nb_monnaie'
    ];
    
    public static $nb_monnaie = ["" => ""];


    public static function boot()
    {
        parent::boot();

        Joueur::observe(new UserActionsObserver);
    }
    
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        $this->attributes['password'] = Hash::make($input);
    }


    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateNaissanceAttribute($input)
    {
        $this->attributes['date_naissance'] = Carbon::createFromFormat(config('quickadmin.date_format'), $input)->format('Y-m-d');
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateNaissanceAttribute($input)
    {
        return Carbon::createFromFormat('Y-m-d', $input)->format(config('quickadmin.date_format'));
    }


    
}