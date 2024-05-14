<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Article;
use App\Models\Category;
use App\Models\ImageBook;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $article = Article::with('categories')->get();
        $books = Book::all();
        foreach($books as $b){
            $a = $b->id;
        }
        $cover = ImageBook::where('book_id', $a)->get('file_image');
        foreach($cover as $c){
            $ff = $c->file_image;
        }
        return view('perpus-smecone.home.index', compact('article','books','ff'));
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

    public function book($id){
        $bookId = Book::find($id);
        foreach($bookId as $b){
            $a = $b->id;
        }
        $cover = ImageBook::where('book_id', $a)->get('file_image');
        foreach($cover as $c){
            $ff = $c->file_image;
        }
        return view('perpus-smecone.home.book', compact('bookId','ff'));
    }
}
