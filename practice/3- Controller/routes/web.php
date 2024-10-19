<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // لاحظ الحرف 'A' الكبير في 'App'
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;

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


Route::controller(PostController::class)->group(function (){
    Route::get("posts","showUsers");
    Route::get("posts/posts_create","creatPost");
    Route::get("posts/posts_edit/{id}","editPost");
    Route::get("posts/posts_update/{id}}","updatePost");
    Route::get("posts/posts_delete/{id}","deletePost");
}) ;

// ------------------------------------------

// Route::get("posts",[PostController::class,"showUsers"]);
// Route::get("posts/create",[PostController::class,"creatPost"]);
// Route::get("posts/edit/{id}",[PostController::class,"editPost"]);
// Route::get("posts/update/{id}",[PostController::class,"updatePost"]);
// Route::get("posts/delete/{id}",[PostController::class,"deletePost"]);
// or
// Route::get("posts",[app\Http\Controllers\PostController::class,"index"]);

// ------------------------------------------


// Route::resource("users",UserController::class);
// Route::resource("users",App\Http\Controllers\UserController::class);

// ------------------------------------------

// Route::resource("users",UserController::class)->except([

//     'create', 'show'
// ]);

// ------------------------------------------
//                 هسميه
// Route::resource("users",UserController::class)->only([

//     'create'
// ]);

// اشطا
// ------------------------------------------

Route::get("user_profile",[UserProfileController::class,"__invoke"]); // ما تنساش ال use يا معلم
// او دي هوه بيعرف لوحده اذا كانت __invoke ولا لا
// Route::get("user_profile",UserProfileController::class);
