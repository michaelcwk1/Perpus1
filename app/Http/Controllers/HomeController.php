<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $article = Article::with('categories')->get();
        return view('perpus-smecone.home.index', compact('article'));
    }

    public function blog(){
        return view('perpus-smecone.blog.index');
    }

    public function post(){
        return view('perpus-smecone.blog.post');
    }

    public function about(){
        return view('perpus-smecone.home.about');
    }

    public function gallery(){
        return view('perpus-smecone.home.gallery');
    }

    public function book(){
        return view('perpus-smecone.home.book');
    }
}
