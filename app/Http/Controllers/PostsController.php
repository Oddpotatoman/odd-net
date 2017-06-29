<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){

        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function create(){
        if (auth()->user()->user_level == 2 && auth()->check()) {
            return view('posts.create');
        } else {
            return redirect('/blog');
        }
    }
    public function show($id){
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }
    public function store(){
    //This function will store a post and send it to the database
        //We are validating the DATA before sending it
        $this->validate(request(),[
            'title' => 'required|max:20',
            'content'=> 'required'
    ]);
        //Create the validated data and send it to the DB
        Post::create([
            'title'=>request('title'),
            'body'=>request('content'),
            'user_id' => auth()->id()
        ]);
        //Time to see the post
        return redirect('/blog');
    }
}
