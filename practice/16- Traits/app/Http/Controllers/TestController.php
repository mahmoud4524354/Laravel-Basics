<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Traits\testTrait;
use Illuminate\Http\Request;

class TestController extends Controller
{

    use testTrait ;



    public function index(){

//        $user = User::all();
//        return $user;
//        return $user->pluck('name');

//        $users = $this->getData(User::class);
//        $users = $this->getData(new User());
//        return $users;



//        $posts = Post::all();
//        return $posts;

//        $posts = $this->getData(Post::class);
        $posts = $this->getData(new Post());
        return $posts;

    }
}
