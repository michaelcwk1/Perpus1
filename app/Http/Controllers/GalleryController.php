<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery_smecone(){
        return view('book.skripsi');
    }
}

public function index()
{
    $books = Book::paginate(12);
    return view('books.index', compact('books'));
}