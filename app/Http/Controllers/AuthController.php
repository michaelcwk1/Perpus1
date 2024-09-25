<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan halaman login
    public function login(){
        return view('auth.login');
    }

    public function check_login(Request $request){
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Coba autentikasi dengan remember me
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->route('perpus-smecone.index'); // Ensure this route exists
        }
    
        // Jika gagal, kembalikan ke halaman login dengan pesan error
        return back()->with('error', 'Email atau password salah.');
    }

    // Tampilkan halaman registrasi
    public function register(){
        return view('auth.register');
    }

    // Proses registrasi
    public function create_user(Request $req){
        $users = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        // Login otomatis setelah registrasi
        Auth::login($users);

        return redirect()->route('home');
    }

    // Proses logout
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
