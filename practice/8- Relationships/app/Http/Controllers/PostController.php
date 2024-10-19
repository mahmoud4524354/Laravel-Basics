<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
//        $post = Post::find(1);
//        return $post;

//        foreach($post->comments as $comment){
//
//            return $comment->body;
//        }

        $comment = Comment::find(3);
        return $comment->post;
    }

}
