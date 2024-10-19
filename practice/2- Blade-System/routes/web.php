<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});


// Route::get("/users",function(){
//     $username ="Osama" ;
//     $username ="samir" ;
//     return view("users",compact("username")) ;
// });


Route::get("/users",function(){

    return view("users") ;
});


Route::get("/posts",function(){

    return view("posts") ;
});


Route::get("layouts/nav",function(){

    return view("layouts/nav") ;
});