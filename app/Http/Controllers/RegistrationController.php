<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create() {

        return view('sessions.create');
    }

    public function store() {

        // Validate form

            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
                ]);

            // Create and save user

            $user = User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => bcrypt(request('password'))
            ]);

        // Sign user in
            auth()->login($user);
        // Redirect to next page
        return redirect('/');
    }
}
