@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection
@section('title')
OddAnBlogg
@endsection

@section('content')
   <div class="blog-index-body">

       <div class="blog-index-top">
           <h1>Odd Andre´s Blogg</h1>
       </div>
       <div class="blog-content">
           @foreach ($posts as $post)
                @include('layouts.posts')
           @endforeach
       </div>
   </div>
@endsection