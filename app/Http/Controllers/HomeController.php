<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Cheval;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $users = Cheval::all();
        if ($user->hasRole('admin')) {
            return view('admin.home')->with('users', $users);
        }
        return view('player.home');
    }
}
