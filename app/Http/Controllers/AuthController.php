<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function check_login(Request $request){
        if(Auth::attempt($req->only('email' ,' password'))){
            return redirect()->route('home');
        }
        return back();
    }

    public function register(){
        return view('Auth.register');
    }
}
