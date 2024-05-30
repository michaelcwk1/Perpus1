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
    public function store_article(Request $request){
        $validation = $request->validate([
            'title' => 'required|max:255|string',
            'image_header'=> 'required|file|mimes:png,jpg'
        ]);

        $MakeSlug = strtolower(str_replace(" ", "-", $request->title));
        $NameTmp = Str::random(12); 
        $ExtensionTmp = $request->file('image_header')->getClientOriginalExtension();
        $FileUpload = $NameTmp.'.'.$ExtensionTmp;
        $request->file('image_header')->move('cover-image', $FileUpload);
        $arc = Article::create([
            'title' => $request->title,
            'slug' => $MakeSlug,
            'image_header' => $FileUpload,
            'naration' => $request->naration,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('data-article');
    }
    public function update_article(Request $request, $id){
        $data = Article::find($id);
        $validation = $request->validate([
            'title' => 'max:255|string',
            'image_header'=> 'file|mimes:png,jpg'
        ]);
        if($request->hasFile('image_header')){
            $FilePath = public_path('cover-image/'.$data->image_header);
            unlink($FilePath);
            $NameTmp = Str::random(12); 
            $ExtensionTmp = $request->file('image_header')->getClientOriginalExtension();
            $FileUpload = $NameTmp.'.'.$ExtensionTmp;
            $request->file('image_header')->move('cover-image', $FileUpload);
            $data->update([
                'title' => $request->title,
                'slug'  => strtolower(str_replace(" ", "-", $request->title)),
                'image_header' => $FileUpload,
                'naration' => $request->naration,
                'category_id' => $request->category_id,
                'user_id' => $request->user_id,

            ]);
            return back();
        }else{
            $data->update([
                'title' => $request->title,
                'slug'  => strtolower(str_replace(" ", "-", $request->title)),
                'naration' => $request->naration,
                'category_id' => $request->category_id,
                'user_id' => $request->user_id,
            ]);
            return back();
        }
        return back();

    }
    public function delete_article($id){
        $data = Article::find($id);
        $FilePath = public_path('cover-image/'.$data->image_header);
        if(file_exists($FilePath)){
            unlink($FilePath);
        }
        $data->delete();
        return back();
    }
}
