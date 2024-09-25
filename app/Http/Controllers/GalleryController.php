<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery_smecone(){
        return view('buku.skripsi');
    }
}

