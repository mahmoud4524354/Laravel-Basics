<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get("users", function(){
//     // return "Hello Morher Hacker" ;
//     // return $request ;
//     return view("users");
// });


// Route::Post("users", function(Request $request){
//     // return $request ;
//     return view("users");
// });

Route::get("users/{mmmmm}", function(string $name){
    // return "Welcome $name" ;
    if($name == "samir"){
        return "admin" ;
        // return view(" ") ;
    }else{
        return "user" ;
    }

});
