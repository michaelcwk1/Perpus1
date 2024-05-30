<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index_users(){
        $users = User::all();
        return view('admin.users.index', [
            'title' => 'Admin Perpus - User List',
            'address' => 'Daftar User',
        ], compact('users'));
    }
    public function detail_users($id){
        $users = User::find($id);
        return view('admin.users.detail', compact('users'), [
            'title' => 'Admin Perpus - User Detail',
            'address' => 'Detail User',
        ]);
    }
    public function update_users(Request $req, $id){
        $users = User::find($id);
        if($req->hasFile('avatar')){
            $FilePath = public_path('avatar/'.$users->avatar);
            unlink($FilePath);
            $nameAva = Str::random(12).'.'.$req->file('avatar')->getClientOriginalExtension();
            $req->file('avatar')->move('avatar', $nameAva);
            $users->update([
                'name' => $req->name,
                'avatar' => $nameAva,
                'password' => Hash::make($req->password),
                'email' => $req->email,
                'role' => $req->role,
            ]);
        } else {
            $users->update([
                'name' => $req->name,
                'password' => Hash::make($req->password),
                'email' => $req->email,
                'role' => $req->role,
            ]);
        }
        return back();
    }

    public function delete_users($id){
        $users = User::find($id);
        $FilePath = public_path('avatar/'.$users->avatar);
        if(file_exists($FilePath)){
            unlink($FilePath);
        }
        $users->delete();
    }
}
