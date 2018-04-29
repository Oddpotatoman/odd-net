@extends('layouts.manyApps')
@section('css')
    <script src="{{ secure_asset('js/oddnote/oddnote.js') }}"></script>
@endsection
@section('title')
    OddNote
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-6" id="text_field">
            <form method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="text">Note</label>
                    <textarea class="form-control" id="textArea" name="textArea" rows="9" placeholder="Type your note here" style="background-color: rgba(0, 161, 255, 0.1);"></textarea>
                </div>
                <button class="btn btn-primary" onclick="return saveLinkData()">Generate link</button>
            </form>
        </div>
        <div class="col-6" id="link_field" style="display: none;">
                <div class="form-group">
                    <label for="text">Note</label>
                    <textarea class="form-control" id="link_field_line" name="text" rows="1" placeholder="TEST"
                              style="background-color: rgba(0, 161, 255, 0.1); font-size: 28px"></textarea>
                </div>
            <button class="btn btn-primary" onclick="copyText()">Copy Link</button>

        </div>
    </div>
@endsection
