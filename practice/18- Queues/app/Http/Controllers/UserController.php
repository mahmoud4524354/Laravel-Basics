<?php

namespace App\Http\Controllers;

use App\Jobs\ActiveUsersJop;
use App\Jobs\SendMailJos;
use App\Mail\SendMailUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $user_id = User::where("status", "1")->pluck("id");
//        return $user_id ;

        ActiveUsersJop::dispatch($user_id)->delay(now()->second(10));
        return "تم إرسال الطلب بنجاح. سيتم تحديث حالة المستخدمين قريبًا.";
    }

    public function sendMail(){

        $data = [
          "mahmoud30204050@gmail.com",
            "mahmoud30204050@gmail.com",
            "mahmoud30204050@gmail.com",
            "mahmoud30204050@gmail.com"
        ];

//        Mail::to($data)->send(new SendMailUsers());
        SendMailJos::dispatch($data);
        return "جاري العمل الان " ;
    }

}

