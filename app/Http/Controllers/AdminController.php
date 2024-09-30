<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Metode untuk halaman index admin
    public function index()
    {
        // Di sini Anda dapat menambahkan logika atau menampilkan view untuk admin
        return view('admin.index');
    }
}
