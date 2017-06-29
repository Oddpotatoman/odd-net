@extends('layouts.layout')
@section('title')

    Create Post

@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <script src="//cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
@endsection
@section('content')
<div class="blog-main">
    <h1>Create a post</h1>
    <div class="blog-form-1">
        <form method="POST" action="/posts">
            {{csrf_field()}}
            <div class="blog-form-group">
                <h2>Title</h2>
                <input type="title" class="blog-form-email" id="title" name="title" placeholder="Enter Title">
            </div>
            <div class="blog-form-group">
                <h2>Content</h2>
                <textarea type="text" class="blog-form-content" name="content" id="content" rows="10"></textarea>
            </div>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>
            <button type="submit" class="blog-form-button">Submit</button>
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