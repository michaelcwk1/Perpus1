<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    public function data_article(){
        $article = Article::with('categories')->get();
        return view('dashboard.Article.data-article', compact('article'));
    }
    public function create_article(){
        $category = Category::all();
        return view('dashboard.Article.create-article', compact('category'));
    }
    public function create_category(){
        $category = Category::all();
        return view('dashboard.Article.category-create', compact('category'));
    }


    // CATEGORY
    public function store_category(Request $request){
        Category::create($request->all());
        return redirect()->route('create-category');
    }

    public function destroy_category($id){
        Category::find($id)->delete();
        return redirect()->route('create-category');
    }

    // BLOG
    public function store_article(Request $req){
        $make_slug = strtolower(str_replace(" ", "-", $req->title));
        Article::create([
            'title' => $req->title,
            'slug' => $make_slug,
            'author' => "Admin",
            'image_header' => $req->image_header,
            'naration' => $req->naration,
            'category_id' => $req->category_id,
        ]);
        return redirect()->route('data-article');
    }
}
