<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct() {

        $this->middleware('guest')->except(['logout']);

    }

    public function login() {
        return view('sessions.login');
    }
    public function store(){
       if (! auth()->attempt(request(['email','password']))) {
           return back();
       }

       return redirect('/blog');

    }

    public function logout(){

            auth()->logout();

        return redirect('/blog');

    }
}
