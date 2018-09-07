@extends('layouts.dndLay')
@section('css')
    <link rel="stylesheet" href="{{ secure_asset('css/simplemde.min.css') }}">
    <script src="{{ secure_asset('js/simplemde.min.js') }}"></script>
    <script src="{{ secure_asset('js/dnd/npc.js') }}"></script>
@endsection
@section('title')
    Create Npc
@endsection
@section('content')
    <div class="container justify-content-center">
        <form action="/addNpc" type="POST">
            {{csrf_field()}}
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="input-group mb-3" style="height: 50px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                </div>
                                <input type="text" name="Name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-2" style="height: 50px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Health</span>
                                </div>
                                <input type="text" name="hp" class="form-control" placeholder="Health" aria-label="Name" aria-describedby="basic-addon1">
                            </div>

                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-2" style="text-align: center;">
                                    <div class="form-group">
                                        <label for="strength">Strength</label>
                                        <input type="text" class="form-control" id="strength" placeholder="Str" name="strength">
                                    </div>
                                </div>
                                <div class="col-2" style="text-align: center;">
                                    <div class="form-group">
                                        <label for="dexterity">Dexterity</label>
                                        <input type="text" class="form-control" id="strength" placeholder="Dex" name="dexterity">
                                    </div>
                                </div>
                                <div class="col-2" style="text-align: center;">
                                    <div class="form-group">
                                        <label for="constitution">Constitution</label>
                                        <input type="text" class="form-control" id="constitution" placeholder="Const" name="constitution">
                                    </div>
                                </div>
                                <div class="col-2" style="text-align: center;">
                                    <div class="form-group">
                                        <label for="intelligence">Intelligence</label>
                                        <input type="text" class="form-control" id="intelligence" placeholder="Int" name="intelligence">
                                    </div>
                                </div>
                                <div class="col-2" style="text-align: center;">
                                    <div class="form-group">
                                        <label for="wisdom">Wisdom</label>
                                        <input type="text" class="form-control" id="wisdom" placeholder="Wis" name="wisdom">
                                    </div>
                                </div>
                                <div class="col-2" style="text-align: center;">
                                    <div class="form-group">
                                        <label for="charisma">Charisma</label>
                                        <input type="text" class="form-control" id="charisma" placeholder="Cha" name="charisma">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped" id="attackTable">
                        <th>Weapon/Attack</th>
                        <th>To attack</th>
                        <th>DC</th>
                        <th>Damage</th>
                        <th>Description</th>
                    </table>
                    <button type="button" class="btn btn-primary" onclick="addAttack()">Add attack</button>
                    <div class="form-group">
                        <label for="background" style="text-align: center">Background History</label>
                        <textarea class="form-control" id="background" name="background"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection