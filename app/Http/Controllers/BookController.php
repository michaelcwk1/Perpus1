<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store_books(Request $request){
        $request->validate([
            'image_book' => 'required',
            'image_book.*' => 'mimes:png,jpg|'
        ]);
        $titles = strtolower(str_replace(" ","-", $request->title));
        $cover = Str::random(12).$request->file('cover')->getClientOriginalExtension();
        $request->file('cover')->move('cover-book', $cover);
        $books = Book::create([
            'title' => $request->title,
            'slug' => $titles,
            'genre' => $request->genre,
            'cover' => $cover,
            'description' => $request->description,
        ]);
        if($request->hasFile('image_book')){
            foreach ($request->file('image_book') as $images ){
                 $NameTmp = Str::random(12); 
                 
                $ExtensionTmp = $images->getClientOriginalExtension();
                $FileUpload = $NameTmp.'.'.$ExtensionTmp;
                $images->move('image-book', $FileUpload);
                $books->images()->create([
                    'file_image' => $FileUpload
                ]);
            }
        }
        return redirect()->route('data-books');
    }
}
