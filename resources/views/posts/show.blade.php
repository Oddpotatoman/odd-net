@extends('layouts.layout')

@section('title')

    Show post {{$post->title}}

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

@section('content')
    <div class="blog-index-top-show">
        <h1>{{$post->title}}</h1>
    </div>
    <div class="blog-post-view">
        <div class="blog-show-content">
            <p>
                {{$post->body}}
            </p>
        </div>
    </div>

    <div class="blog-show-comment">
        <div class="blog-show-comment-content">
            @foreach ($post->comments as $comment)
                <article>
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}
                    </strong>
                    {{ $comment->Body }}
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