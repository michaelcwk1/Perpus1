<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function check_login(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('home');
        }
        return back();
    }

    public function register(){
        return view('auth.register');
    }

    public function create_user(Request $req){
        $users = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);
        Auth::login($users);
        return redirect()->route('home');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
