<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\ImageBook;
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
        $cover = Str::random(12).'.'.$request->file('cover')->getClientOriginalExtension();
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
                $FileTmp = Str::random(12).'.'.$images->getClientOriginalExtension();
                $images->move('image-book', $FileTmp);
                $books->images()->create([
                    'file_image' => $FileTmp
                ]);
            }
        }
        return redirect()->route('data-books');
    }

    public function delete_book($id){
        $books = Book::find($id);
        $coverPath = public_path('cover-book/'.$books->cover);
        foreach($books->images as $book){
            $FileImagePath = public_path('image-book/'.$book->file_image);
        }
        if(file_exists($coverPath) && file_exists($FileImagePath)){
            unlink($coverPath);
            foreach($books->images as $ImageTmp){
                $FileImage = public_path('image-book/'.$ImageTmp->file_image);
                unlink($FileImage);
            }
        }
        $books->delete();
        return back();
    }
    public function update_book($id, Request $request){
        $book = Book::find($id);
        if($request->hasFile('cover')){
                $checkCoverPath = public_path('cover-book/'.$book->cover);
                unlink($checkCoverPath);
                $titles = strtolower(str_replace(" ","-", $request->title));
                $cover = Str::random(12).'.'.$request->file('cover')->getClientOriginalExtension();
                $request->file('cover')->move('cover-book', $cover);
                $book->update([
                'title' => $request->title,
                'slug' => $titles,
                'genre' => $request->genre,
                'cover' => $cover,
                'description' => $request->description,
            ]);
        }else if($request->hasFile('image_book')){
            foreach($book->images as $ImageTmp){
                $FileImage = public_path('image-book/'.$ImageTmp->file_image);
                unlink($FileImage);
                $ImageTmp->delete();
            }
            foreach ($request->file('image_book') as $images ){
                $FileTmp = Str::random(12).'.'.$images->getClientOriginalExtension();
                $images->move('image-book', $FileTmp);
                $book->images()->create([
                    'file_image' => $FileTmp
                ]);
            }
        }else{
            $titles = strtolower(str_replace(" ","-", $request->title));
            $book->update([
                'title' => $request->title,
                'slug' => $titles,
                'genre' => $request->genre,
                'description' => $request->description,
            ]);
        }
        return back();
    }
    public function topBook(Request $request, $id){
        $books = Book::find($id);
        $books->update([
            'top_book' => $request->top_book
        ]);
        return back();
    }
}
