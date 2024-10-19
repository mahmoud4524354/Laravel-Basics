<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

//        return User::all()->dd() ;
//        return abort(403);


//        $user = User::where("name", auth()->user()->name)->get();
        $user = User::where("name",username())->get();
        return $user;




    }
}
