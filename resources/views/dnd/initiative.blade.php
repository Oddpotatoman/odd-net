@extends('layouts.dndLay')

@section('css')

    <script src="{{ asset('js/dnd/initiative.js') }}"></script>

@endsection

@section('title')
    Odds Dnd Cave
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-2" style="text-align: right">
            <button type="button" class="btn btn-primary" onclick="testClick()">Add Initiative</button>
            <button type="button" class="btn btn-primary" onclick="testClick()">Sort</button>

        </div>
        <div class="col-lg-8">
            <div  id="init-container">

            </div>
<!--
            <div id="initiative-">
                <div class="form-group">
                    <label for="initiative-">Table name</label>
                    <input type="text" name="tableName" class="form-control" id="initiative-" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="tableName">Table name</label>
                    <input type="text" name="tableName" class="form-control" id="initiative-" placeholder="Enter name">
                </div>
            </div>
            -->
        </div>
    <div class="col-lg-2"></div>

    </div>

@endsection