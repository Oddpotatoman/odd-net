@extends('layouts.manyApps')
@section('css')

@endsection
@section('title')
    OddNote
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="/oddnote/add" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="text">Note</label>
                    <textarea class="form-control" id="text" name="text" rows="9" placeholder="Type your note here" style="background-color: rgba(0, 161, 255, 0.1);"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Generate link</button>
            </form>
        </div>
    </div>
@endsection
