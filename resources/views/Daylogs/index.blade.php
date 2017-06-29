@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Daylogs/daylogs.css') }}">
@endsection
@section('title')
    Daylog
@endsection
@section('content')
    <div class="daylog-text-input">
        <form method="post" action="/daylog">
            {{ csrf_field() }}
        <div class="global-form-input-text">
            <input type="text" class="global-form-text-short" name="body" id="daylogPost">
            <button type="submit" class="global-form-button">Add</button>
        </div>
        </form>
        @include('layouts.inputerror')
    </div>
    <div class="daylog-index-content">

        @foreach($logs as $log)
            <div class="daylog-log-container">
                <article> {{ $log->body }} <span> {{ $log->created_at }} </span></article>
            </div>
        @endforeach
    </div>

@endsection