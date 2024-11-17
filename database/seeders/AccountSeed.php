<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create Account for admin system
        $user=new User();
        $user->email="abdxax@gmail.com";
        $user->password=bcrypt('1094906623');
        $user->save();
        $info=new UserInfo();
        $info->name="Abdulrahman";
        $info->user_id=$user->id;
        $info->depart_id=4;
        $info->save();

    }
}
