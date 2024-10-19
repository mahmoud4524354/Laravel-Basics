<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{


    public function run()
    {
        User::truncate();

        User::Create([
           "name" => "samir",
           "email" => "samir@gmail.com",
//           "password" => bcrypt("123456")
            "password" => Hash::make("123456")
        ]);

        User::Create([
            "name" => "MEGO",
            "email" => "mego@gmail.com",
            "password" => Hash::make("123456")
        ]);
    }
}
