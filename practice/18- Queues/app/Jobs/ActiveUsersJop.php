<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ActiveUsersJop implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $users_id ;

    public function __construct($users_id)
    {
        $this->users_id = $users_id; // Fix the variable name
    }


    public function handle()
    {
        $users = $this->users_id ;
//        $user_id = User::where("status", "0")->pluck("id");
//        foreach ($user_id as $id) {
        foreach ($users as $id) {
            User::where("id", $id)->update([
                "status" => "0"
            ]);
        }
    }
}
