<?php

use App\Http\Controllers\UploadImage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
//    return view('welcome');
//    Storage::disk('public')->put('test.txt', 'welcome');
    Storage::disk('samir')->put('test.txt', 'welcome');

    return "ok" ;

});


Route::get("show",[UploadImage::class,'showForm']);
Route::get("show/image",[UploadImage::class,'index']);
Route::post("store",[UploadImage::class,'store'])->name('photo.save');
