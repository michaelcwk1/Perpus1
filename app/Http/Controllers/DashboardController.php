<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    public function dataArticle(){
        return view('dashboard.Article.data-article');
    }
    public function makeArticle(){
        return view('dashboard.Article.data-create');
    }
    public function makeCategory(){
        return view('dashboard.Article.category-create');
    }
}
