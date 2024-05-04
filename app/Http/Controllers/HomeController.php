<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function blog(){
        return view('blog.index');
    }

    public function post(){
        return view('blog.post');
    }

    public function about(){
        return view('home.about');
    }

    public function gallery(){
        return view('home.gallery');
    }

    public function book(){
        return view('home.book');
    }
}
