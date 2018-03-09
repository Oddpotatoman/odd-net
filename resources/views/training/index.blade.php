@extends('layouts.dndLay')

@section('css')

<script src="{{ asset('js/training/training.js') }}"></script>

@endsection

@section('title')
    Odds Dnd Cave
@endsection

@section('content')
    <div class="row justify-content-center">

        <div class="col-lg-10">

            <button class="btn btn-primary" id="training_button" onclick="alert('rekk you')">PRIMARY</button>

        </div>

    </div>
@endsection
