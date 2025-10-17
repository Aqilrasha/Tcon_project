<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman beranda.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Data yang mungkin dibutuhkan di view.
        // Untuk halaman statis ini, kita hanya melempar array kosong.
        $data = [
            'page_title' => 'Beranda - Tcon',
            // Di aplikasi nyata, ini bisa berisi daftar konser, artis, dll.
            // 'featured_concerts' => Concert::where('is_featured', true)->get(),
        ];

        // Memanggil view 'home.blade.php' dan mengirimkan data
        return view('home', $data);
    }
}