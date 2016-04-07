<?php

use App\Permission;
use App\Role;
use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


 
    $admin = Role::find(1);
    $user = User::find(1);
    $user->attachRole($admin);
    
$user = Auth::user();
 
 if ($user->hasRole('admin'))
 {
 return "role admin!";
 }
Route::filter('create_user', function()
 {
 $user = Auth::user();
 
 if (!$user->ability(['admin'], ['create_user']))
 {
 return "creation user!";
 }
 });
Route::get('/create_user', ['before' => ['create_user'], function()
 {
 return "puedes crear!";
 }]);
 
 Route::filter('create_user2', function()
 {
 if (!Entrust::can('create_user') )
 {
 return "creer2";
 }
 });
Route::get('/create_user', ['before' => ['create_user2'], function()
 {
 return "creer!";
 }]);