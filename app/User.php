<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface 
{

use HasRole;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    $create_user = new Permission();
    $create_user->name = 'create_user';
    $create_user->display_name = 'crear usuarios';
    $create_user->save();
 
    $admin = new Role();
    $admin->name = 'admin';
    $admin->save();
    $admin->attachPermission($create_user);
    $user = User::find(1);
    $user->attachRole($admin);
}
