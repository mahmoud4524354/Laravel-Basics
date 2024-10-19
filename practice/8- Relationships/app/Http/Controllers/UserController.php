<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
//        return "Users" ;
//        $user = User::find(1)->phone;
//        return $user;

//        $phone = User::find(1);
//        return $phone->user;
//        $user = User::find(1);
//        return $user;

        $role = Role::find(1);
        return $role;
    }
}
