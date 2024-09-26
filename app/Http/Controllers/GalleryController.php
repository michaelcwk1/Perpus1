<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery_smecone()
    {
        $books = [
            ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 1', 'description' => 'Deskripsi singkat Buku 1', 'image' => 'hukum.jpg'],
            ['title' => 'Judul Buku 2', 'description' => 'Deskripsi singkat Buku 2', 'image' => 'hukum.jpg'],
        ];

        return view('buku.skripsi', compact('books'));
    }

    public function gallery_artikel()
    {
        $books = [
            ['title' => 'Judul Artikel 1', 'description' => 'Deskripsi singkat Artikel 1', 'image' => 'artikel1.png'],
            ['title' => 'Judul Artikel 2', 'description' => 'Deskripsi singkat Artikel 2', 'image' => 'artikel2.png'],
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
            ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 1', 'description' => 'Deskripsi singkat Jurnal 1', 'image' => 'manajemen.jpg'],
            ['title' => 'Judul Jurnal 2', 'description' => 'Deskripsi singkat Jurnal 2', 'image' => 'manajemen.jpg'],
        ];

        return view('buku.jurnal', compact('books'));
    }
}
