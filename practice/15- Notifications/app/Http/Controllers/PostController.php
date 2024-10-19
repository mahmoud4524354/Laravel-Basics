<?php

namespace App\Http\Controllers;

use App\Models\User; // لاستيراد نموذج المستخدم
use App\Models\Post; // لاستيراد نموذج المنشورات
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification; // لاستيراد Notification Facade
use App\Notifications\CreatePost; // استيراد الإشعار الخاص بك

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        $users = User::where('id', '!=', auth()->user()->id)->get();
        $user_create = auth()->user()->name;
        Notification::send($users, new CreatePost($post->id, $user_create, $post->title));

        return redirect()->route('dashboard');
    }

    public function show($id)
    {
        $post = Post::findorFail($id);
        $getId = DB::table('notifications')->where('id', $id)->pluck($id);
//        return $getId;
        DB::table('notifications')->where('id', $getId)->update([
            "read_at"=>now()
        ]);
    }

    public function markAsRead($id){

        $user = User::find(auth()->user()->id);

        foreach ($user->unreadNotifications as $notification) {
//            $notification->markAsRead();
            $notification->delete();
        }

        return redirect()->back();

    }


}
