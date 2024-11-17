<?php

namespace App\Http\Controllers;

use App\DTO\LoginDTO;
use App\DTO\RegisterDTO;
use App\services\AccountServcie;
use Illuminate\Http\Request;

class AccountControler extends Controller
{
    private AccountServcie $servcie;

    /**
     * @param AccountServcie $servcie
     */
    public function __construct(AccountServcie $servcie)
    {


        $this->servcie = $servcie;
    }

    public function register(Request $request)
    {
        $user=auth()->user();
        if(!$user||$user->information->depart_id!=4)
            return redirect()->route('login');
        if($request->isMethod('post')){
            $vaild=$request->validate([
               'email'=>'required',
               'name'=>'required',
               'password'=>'required',
               'depart'=>'required'
            ]);
            $register=new RegisterDTO($vaild['email'],$vaild['name'],$vaild['password'],'999',$vaild['depart']);
            $result=$this->servcie->register($register);
            if($result)
                return  redirect()->route('register');
        }
        $users=$this->servcie->getUsers();
        $department=$this->servcie->getDepartment();
        $arr=['users'=>$users,'departments'=>$department];
        return view('register',$arr);
    }

    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $vaild=$request->validate([
               'email'=>'required',
               'password'=>'required'
            ]);

            $login=new LoginDTO($vaild['email'],$vaild['password']);
            $result=$this->servcie->login($login);
            if($result){
                return  redirect()->route('user.index');
            }
            return redirect()->route('login')->with('error','البريد الالكتروني او  كلمة المرور غير صحيحه ');

        }
        return view('login');
    }

}
