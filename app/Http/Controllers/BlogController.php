<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // BLOG
    public function store_article(Request $req){
        $validation = $req->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'image_header'=> 'required|file|extensions:jpg'
        ]);

        $make_slug = strtolower(str_replace(" ", "-", $req->title));
        $name_header = Str::random(12); 
        $extension_header = $req->file('image_header')->getClientOriginalExtension();
        $file_header = $name_header.'.'.$extension_header;
        $req->file('image_header')->move('cover', $file_header);
        $arc = Article::create([
            'title' => $req->title,
            'slug' => $make_slug,
            'author' => $req->author,
            'image_header' => $file_header,
            'naration' => $req->naration,
            'category_id' => $req->category_id,
        ]);
        return redirect()->route('data-article');
    }
    public function delete_article($id){
        $data = Article::find($id);
        $file_img = public_path('cover/'.$data->image_header);
        if(file_exists($file_img)){
            unlink($file_img);
        }
        $art->delete();
        return back();
    }
}
