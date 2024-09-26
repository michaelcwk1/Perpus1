<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery_smecone()
{
    $books = [
        ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'book1.png'],
        ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'book2.png'],
    ];

    return view('buku.skripsi', compact('books'));
}

public function gallery_artikel()
{
    $books = [
        ['title' => 'Judul Artikel 1', 'description' => 'Deskripsi singkat Artikel 1', 'image' => 'artikel1.png'],
        ['title' => 'Judul Artikel 2', 'description' => 'Deskripsi singkat Artikel 2', 'image' => 'artikel2.png'],
        // Add more articles if necessary
    ];

    return view('buku.artikel', compact('books'));
}

public function gallery_disertasi()
{
    $books = [
        ['title' => 'Judul Disertasi 1', 'description' => 'Deskripsi singkat Disertasi 1', 'image' => 'disertasi1.png'],
        ['title' => 'Judul Disertasi 2', 'description' => 'Deskripsi singkat Disertasi 2', 'image' => 'disertasi2.png'],
    ];

    return view('buku.diserti', compact('books'));
}

public function gallery_jurnal()
{
    $books = [
        ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'jurnal1.png'],
        ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'jurnal2.png'],
        // Add more journals if necessary
    ];

    return view('buku.jurnal', compact('books'));
}

}
