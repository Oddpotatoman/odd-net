@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/login.css') }}">
@endsection
@section('title')

@endsection
@section('content')

    <div class="container-login-fields">
        <p class="text">Sign In</p>
        <div class="container-login-email clearfix">
            <p class="text-login-email">E-mail</p>
            <input class="input-login-text-email" name="email" type="text">
        </div>
        <div class="container-login-password clearfix">
            <p class="text-login-password-label">Passord</p>
            <input class="password-login-text-pass" name="password" type="password">
        </div>
    </div>

@endsection