<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $user=Auth::user();

        switch($user) {
            case $user->isAdmin(): return view('welcome_administrator',compact('user')); break;
            case $user->isTeacher(): return view('welcome_teacher', compact('user')); break;
            case $user->isStudent(): return view('welcome_student', compact('user')); break;
            default: return redirect('/');
        }

//        return view('home', compact('user'));
//        return redirect('/');
    }
}
