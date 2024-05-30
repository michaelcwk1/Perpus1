<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Category;
use App\Models\ImageBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $article = Article::with('categories')->get();
        $books = Book::where('top_book', 'yes')->get();
        return view('perpus-smecone.home.index', compact('article','books'));
    }

    public function blog(){
        $category = Category::all()->where('name');
        $article = Article::with('categories','users')->get();
        return view('perpus-smecone.blog.index', compact('category','article'));
    }
    public function getPreviewText($text, $count = 2)
    {
        $sentences = preg_split('/(?<=[.!?])\s+/', $text, $count + 1, PREG_SPLIT_NO_EMPTY);
        if (count($sentences) > $count) {
            array_pop($sentences);
        }
        return implode(' ', $sentences);
    }
    public function post(Article $article){
        return view('perpus-smecone.blog.post', compact('article'));
    }

    public function about(){
        return view('perpus-smecone.home.about');
    }

    public function book(Book $book){
        return view('perpus-smecone.home.book', compact('book'));
    }
}
