<?php

namespace App\Http\Controllers;

use App\Daylog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaylogsController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $user = \App\User::find(Auth::user()->id);
            $logs = $user->daylogs;
            return view('Daylogs.index', compact('logs'));
        } else {
            return view('errors.403');
        }
    }
    public function create(User $user){
        $this->validate(request(), [
            'body' => 'required|max:50',
        ]);
            $user->addDaylog(request('body'));
        return back();
    }
}
