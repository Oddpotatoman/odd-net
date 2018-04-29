@extends('layouts.manyApps')

@section('css')
    <script src="{{ asset('js/oddnote/oddnote_link.js') }}"></script>
@endsection
@section('title')
    OddNote
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-6" id="text_field" style="display: none;">
                <div class="form-group">
                    <label for="text">Note</label>
                    <textarea class="form-control" id="textArea" name="textArea" rows="9" placeholder="Type your note here" style="background-color: rgba(0, 161, 255, 0.1);" disabled></textarea>
                </div>
        </div>
        <div class="col-6" id="link_field">
            <form>
                {{csrf_field()}}
                <div class="form-group">
                        <label for="text">Note</label>
                        <textarea class="form-control" id="link_field_line" name="text" rows="1" placeholder="TEST"
                                  style="background-color: rgba(0, 161, 255, 0.1); font-size: 28px" disabled>{{$link}}</textarea>
                    </div>
                <button class="btn btn-primary" onclick="return getLinkData()">Open link</button>
            </form>
        </div>
    </div>
@endsection
