<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(StorePostRequest $request)
//    public function store(Request $request)
    {

//الطريقه دي تستخدمها لو في عدد قليل من الاعمده
//        $request->validate([
//            'title' => "required",
//            'body' => 'required',
//        ]);

        Post::create([
            "title" => $request["title"],
            "body" => $request["body"]
        ]);
        return response("اتم اضافه البيانات");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
