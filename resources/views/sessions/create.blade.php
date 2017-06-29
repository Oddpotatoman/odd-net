@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/user/registration.css') }}">
@endsection
@section('title')
    Create User
@endsection
@section('content')

    <div class="registration-head">
        <h1>Register</h1>
    </div>
    <div class="registration-body">
        <form method="POST" action="/register">
            {{ csrf_field() }}

            <div class="registration-input-group-1">
                <div class="registration-form-input-text">
                    <label for="name">Name</label>
                    <input type="text" class="registration-form-text-short" id="name" name="name" required>
                </div>
                <div class="registration-form-input-text">
                    <label for="email">Email</label>
                    <input type="text" class="registration-form-text-short" id="email" name="email" required>
                </div>
                <div class="registration-form-input-text">
                    <label for="password">Password</label>
                    <input type="password" class="registration-form-pass" id="password" name="password" required>
                </div>
                <div class="registration-form-input-text">
                    <label for="password_confirmation">Confirm</label>
                    <input type="password" class="registration-form-pass" id="password_confirmation" name="password_confirmation" required>
                </div>
                @include('layouts/inputerror')

                <div class="registration-form-input-text">
                    <button type="submit" class="registration-form-submit">Register</button>
                </div>
            </div>

        </form>
    </div>

@endsection