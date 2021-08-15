<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        //return $req->input();
        $user= User::where(['email'=>$req->email])->first();
        //return $user->passward;
        if(!$user || !Hash::check($req->passward,$user->passward))
        {
            return " username or passward is not matched ";
        }
        else {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function loginpage()
    {
        return view("login");
    }
    function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
    function signup(Request $req)
    {
       
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->eamil;
        $user->passward=Hash::make ($req->passward);
        $user->save();
        return redirect('/login');
    }
    function admin()
    {
        return view("admin");
    }
}
