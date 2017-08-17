@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/login.css') }}">
@endsection
@section('title')

@endsection
@section('content')

    <div class="user-container">
        <h1>Sign In</h1>
        <div class="user-signin-container">

            <form method="POST" action="/login">
                {{csrf_field()}}
                <div class="global-form-input-text">
                    <label for="email">Email Adress</label>
                    <input type="email" class="global-form-text-short" name="email" id="email" required>
                </div>
                <div class="global-form-input-text">
                    <label for="password">Password</label>
                    <input type="password" class="global-form-text-short" name="password" id="password" required>
                </div>
                <button type="submit" id="sign-in-button" class="global-form-button">Sign in</button>
            </form>
        </div>

    </div>



@endsection