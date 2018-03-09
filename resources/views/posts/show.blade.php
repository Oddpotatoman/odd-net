@extends('layouts.layout')

@section('title')

    Show post {{$post->title}}

@endsection

@section('css')
    <script src="js/clean-blog.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

@section('content')
    <!--
    <div class="blog-index-top-show">
        <h1>{{$post->title}}</h1>
    </div>
    <div class="blog-post-view">
        <div id="blog-show-content">
            <p>
                {!!  $post->body !!}
            </p>
        </div>
    </div>
    -->
    <header class="masthead" style="background-image: url('/img/computer-pic.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>{{$post->title}}</h1>
                        <span class="subheading">A salty blog about Development</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row jus">
                <div class="col-lg-9 col-md-10 mx-auto">
                   {!! $postBody !!}
                </div>
            </div>
        </div>
    </article>

    <div class="blog-show-comment">
        <div class="blog-show-comment-content">
            @foreach ($post->comments as $comment)
                <article>
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}
                    </strong>
                    <span>
                    {{ $comment->Body }}
                    </span>
                </article>
            @endforeach
        </div>

        <div class="blog-show-comment-add">

            <form method="POST" action="posts/{{$post->id}}/comments">
                {{csrf_field()}}
                <div class="blog-show-comment-text">
                    <textarea name="body" placeholder="Write a fun comment" class="blog-show-comment-add"></textarea>
                </div>
                <button type="submit" class="blog-form-button">Add Comment</button>
            </form>

        </div>
    </div>
@endsection