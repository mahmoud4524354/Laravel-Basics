<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::MEGO()->first();
        return $post;
//        $posts = Post::all();
//        $posts = Post::get();
//        return view('posts.index', compact('posts')); ;

//        return  "posts" ;



    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
//        $post = new Post();
//        $post->title = $request->title;
//        $post->body = $request->body;
//        $post->save();
////        return "تم اضافه البيانات" ;

    Post::create(
//        سام الحقل في الداتابيز => اسم التكست في الفورم
//        "title" => $request->title ,
//        "body" =>  $request->body
//
    $request->all()

    );
//        return redirect()->route('posts.index');

        return response("تم اضافه البيانات") ;
    }

    public function show()
    {
        $posts = Post::onlyTrashed()->get();
//        return  $posts ;
        return view('posts.softdelete', compact('posts'));
    }



    public function edit($id)
    {
//        $post = Post::findorfail($id);
////        return $post ;
///
         $post = Post::where("id", $id)->first();

        return view('posts.edit', compact('post'));
//        if($post){
//            return $post;
//        }else{
//            return response("لا يوجد");
//        }
    }

    public function update(Request $request, $id)
    {
        $post = Post::findorFail($id);
//        $post->title =  $request->title;
//        $post->body =  $request->body;
//        $post->save();

//        $post->update([
//            $post->title =  $request->title,
//        $post->body =  $request->body
//        ]);
//
        $post->update($request->all());

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        Post::findorfail($id)->delete();
//        Post::destroy($id);
        return redirect()->route('posts.index');
    }

    public function restore($id){
        $post = Post::onlyTrashed()->where('id', $id)->restore();
//        return view('posts.restore', compact('post'));

        return redirect()->back();
    }

    public function forcedelete($id)
    {
        Post::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back();
    }
}
