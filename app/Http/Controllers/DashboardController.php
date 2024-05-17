<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class DashboardController extends Controller
{
    public function index(){
        $article = Article::with('categories')->get();
        return view('admin.index', compact('article'));
    }

    // ARTICLE
    public function data_article(){
        $article = Article::with('categories')->get();
        return view('admin.article.data-article', compact('article'));
    }
    public function create_article(){
        $category = Category::all();
        return view('admin.article.create-article', compact('category'));
    }
    public function detail_article($id){
        $detail = Article::with('categories')->find($id);
        $category = Category::all();
        return view('admin.article.detail-article', compact('detail' ,'category'));
    }
    

    // CATEGORY
    public function create_category(){
        $category = Category::all();
        return view('admin.article.create-category', compact('category'));
    }
    public function store_category(Request $request){
        $validation = $request->validate([
            'name' => 'required|max:255'
        ]);
        Category::create($validation);
        return redirect()->route('create-category');
    }

    public function destroy_category($id){
        Category::find($id)->delete();
        return redirect()->route('create-category');
    }

    
    // BOOK
    public function data_books(){
        $books = Book::all();
        return view('admin.books.data-books', compact('books'));
    }
    public function create_books(){
        return view('admin.books.create-books');
    }
    public function edit_books($id){
        $detailB = Book::find($id);
        return view('admin.books.detail-books', compact('detailB'));
    }
}
