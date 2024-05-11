<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $article = Article::with('categories')->get();
        return view('perpus-smecone.home.index', compact('article'));
    }

    public function blog(){
        $category = Category::all()->where('name');
        $article = Article::with('categories')->get();
        return view('perpus-smecone.blog.index', compact('category','article'));
    }

    public function post(Article $article){
        return view('perpus-smecone.blog.post', compact('article'));
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
