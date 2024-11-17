<?php

namespace App\services;

use App\DTO\LoginDTO;
use App\DTO\RegisterDTO;
use App\Models\Department;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Support\Facades\DB;

class AccountServcie
{

    public function register( RegisterDTO $registerDTO)
    {
        DB::beginTransaction();
        try {
         //Create User
            $user=new User();
            $user->email=$registerDTO->getEmail();
            $user->password=$registerDTO->getPassword();
            $user->save();
            //add User info
            $info=new UserInfo();
            $info->name=$registerDTO->getName();
            $info->user_id=$user->id;
            $info->depart_id=$registerDTO->getDepId();
            $info->save();
            DB::commit();
            return true;
        }
        catch (\Exception $exception){
            DB::rollback();
        }
    }

    public function login(LoginDTO $login)
    {
       if(auth()->attempt(['email'=>$login->getEmail(),
           'password'=>$login->getPassword()])){
           return true;
       }
       return false;
    }

    public function getUsers()
    {
        return User::all();
    }

    public function getDepartment()
    {
        return Department::all();
    }

}
