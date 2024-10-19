<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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


//Route::get("posts",[PostController::class,'index'])->name('posts.index');

//Route::get("posts/create",[PostController::class,"create"])->name('posts.create');

//Route::post("post/insert",[PostController::class,'insert'])->name('post.insert');

//Route::get("posts/edit/{id}",[PostController::class,'edit'])->name('post.edit');

//Route::post("post/update/{id}",[PostController::class,'update'])->name('post.update');

//Route::post("post/delete/{id}",[PostController::class,'delete'])->name('post.delete');
//Route::get("post/delete/{id}",[PostController::class,'delete'])->name('post.delete');

//Route::get("posts/delete/all/truncate", [PostController::class, 'deleteAllTruncate'])->name('posts.delete.all.truncate');
//Route::get("posts/delete/all", [PostController::class, 'deleteAll'])->name('posts.delete.all');


Route::controller(PostController::class)->group(function () {
    Route::get("posts",'index')->name('posts.index');
    Route::get("posts/create","create")->name('posts.create');
Route::post('posts/insert', "insert")->name('posts.insert');
Route::get("posts/edit/{id}",'edit')->name('post.edit');
Route::post("post/update/{id}",'update')->name('post.update');
Route::get("post/delete/{id}",'delete')->name('post.delete');
Route::get("posts/delete/all",'deleteAll')->name('posts.delete.all');
Route::get("posts/delete/all/truncate", 'deleteAllTruncate')->name('posts.delete.all.truncate');
});


