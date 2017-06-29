<?php

namespace App;

class Comment extends Model
{
    public function post(){ // $comment->post Gives the post this comment is related to

        return $this->belongsTo(Post::class);
    }
    public function user(){   //$comment->user (Gives the user this comment is related to) To grab name $comment->user->name

        return $this->belongsTo(User::class);
    }
}
