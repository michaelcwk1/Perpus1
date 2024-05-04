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
        return view('dashboard.Article.data-article');
    }
    public function create_article(){
        $category = Category::all();
        return view('dashboard.Article.data-create', compact('category'));
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
}
