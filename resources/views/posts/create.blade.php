@extends('layouts.layout')
@section('title')

    Create Post

@endsection
@section('css')
    <script src="{{ asset('js/simplemde.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/simplemde.min.css') }}">
    <script src="{{ asset('js/posts/create.js') }}"></script>

@endsection

@section('content')
    <header class="masthead" style="background-image: url('img/computer-pic.jpg'); height: 70px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                </div>
            </div>
        </div>
    </header>
<div class="row justify-content-center">
    <div class="col-lg-10">
        <h1>Create a post</h1>
        <form method="POST" action="/posts">
            {{csrf_field()}}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default"><b>Title</b></span>
                </div>
                <input type="text" name="title" placeholder="Enter title" id="title" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div>
                <h2>Content</h2>
                <textarea name="content" id="content-Editor"></textarea>
            </div>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @if(count($errors))
    <div class="blog-error-report">
        <ul>
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>
    @endif
</div>

@endsection