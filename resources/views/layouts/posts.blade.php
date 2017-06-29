<div class="blog-post-view">
    <a href="/blog/{{$post->id}}"><h2 class="blog-post-title">{{$post->title}}</h2></a>
    <p class="blog-post-meta">{{$post->user->name}} on {{ $post->created_at }}</p>
    <p class="blog-content-post">
       {{$post->body}}
    </p>
</div>