<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonserController extends Controller
{
     public function index()
    {

        return view('konser', [
            'page_title' => 'Daftar Konser - Tcon'
        ]);
    }
}
