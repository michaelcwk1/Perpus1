<?php

namespace App\Http\Controllers;


class HistoryController extends Controller
{
    public function his_uhw()
    {
        return view('history.history');  // Pastikan Anda memiliki file view bernama 'history.blade.php'
    }
}
