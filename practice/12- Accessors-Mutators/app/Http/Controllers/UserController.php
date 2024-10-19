<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index($id){
//        return $id ;
        $user = User::find($id);
        return $user->name;
    }

    public function store(){
        User::create([
            "name"=>"ali",
            "email"=>"ali@gmail.com",
            "password"=>Hash::make("123456"),
//            "password"=>bcrypt("123456")
        ]);
        return response("Ok") ;
    }

}
