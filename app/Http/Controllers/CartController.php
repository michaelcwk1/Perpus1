<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function keranjang()
    {
        return view('history.keranjang');  // Pastikan Anda memiliki file view bernama 'history.blade.php'
    }
}
