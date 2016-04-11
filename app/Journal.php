<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

class Journal extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'journal';
    
    protected $fillable = ['date_journal'];
    

    public static function boot()
    {
        parent::boot();

        Journal::observe(new UserActionsObserver);
    }
    
    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateJournalAttribute($input)
    {
        $this->attributes['date_journal'] = Carbon::createFromFormat(config('quickadmin.date_format'), $input)->format('Y-m-d');
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateJournalAttribute($input)
    {
        return Carbon::createFromFormat('Y-m-d', $input)->format(config('quickadmin.date_format'));
    }


    
}