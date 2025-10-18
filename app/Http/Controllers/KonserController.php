<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonserController extends Controller
{
     public function index()
    {
        // nanti bisa tambah logic database di sini
        return view('konser', [
            'page_title' => 'Daftar Konser - Tcon'
        ]);
    }
}
