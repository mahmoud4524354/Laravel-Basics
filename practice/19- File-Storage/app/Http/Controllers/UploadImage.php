<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;

class UploadImage extends Controller
{
    use UploadImageTrait;

    public function showForm(){
        return view('upload');
    }

//    public function store(Request $request){
//        return $request ;
//        $image = $request->file('photo')->getClientOriginalName();
//        $path = $request->file('photo')->store('users', "samir");
//        $path = $request->file('photo')->storeAs('users', "$image","samir");

//        return $image ;
//        return $path;

//        return $this->uploadImage($request,"admins");
//    }


    public function store(Request $request){

//        return $this->uploadImage($request,"SuPerAdmins");
         $path = $this->uploadImage($request,"Admins");

         Image::create([
             "path" => $path,
         ]);
        return "upload success";
    }



    public function index(){
        $images = Image::all();
        return view('index',compact('images'));
    }



}
