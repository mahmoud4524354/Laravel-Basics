<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showUsers(){
        return view("posts");
    }
    public function creatPost(){
        return view("posts_create");
    }
    public function editPost(){
        return "editPost";
    }
}
