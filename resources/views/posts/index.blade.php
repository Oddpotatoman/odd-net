@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="css/blog.css" rel="stylesheet">
    <script src="js/clean-blog.min.js"></script>


@endsection
@section('title')
OddAnBlogg
@endsection

@section('content')
    <!-- Page Header -->
<header class="masthead" style="background-image: url('img/computer-pic.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Blog of Odd</h1>
                    <span class="subheading">A salty blog about Development</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach ($posts as $post)
            <div class="post-preview">
                <a href="/blog/{{ $post->id }}">
                    <h2 class="post-title">
                        {{$post->title}}
                    </h2>
                </a>
                <p>{{ strip_tags(substr($post->body, 0, 30)) }}</p>
                <p class="post-meta">Posted by
                    <a href="#">{{$post->user->name}}</a>
                    on {{$post->created_at}}</p>
            </div>
                <hr>
            @endforeach
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>

@endsection
