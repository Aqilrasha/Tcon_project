<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailKonserController extends Controller
{
     public function show()
    {
        $konser = [
            'judul' => 'Arash Buana | rumah Tour - Jakarta Date',
            'tanggal' => '17 November 2024',
            'lokasi' => 'Balai Sarbini, Jakarta',
            'gambar' => 'konser arash.jpg',
            'deskripsi' => [
                "Arash Buana kembali ke Jakarta dalam rangkaian tur terbarunya, '*rumah* Tour'. Konser ini akan menjadi malam intim yang penuh dengan eksplorasi emosi dan lirik mendalam dari album terbarunya, serta lagu-lagu hits yang telah membesarkan namanya di skena indie pop Indonesia.",
                "Rasakan pengalaman mendengarkan musik Arash Buana secara langsung dengan tata panggung dan akustik yang disiapkan khusus untuk venue Balai Sarbini yang berkelas. Ini adalah kesempatan langka untuk menjadi bagian dari cerita *rumah* yang ia bawakan. Jangan lewatkan tiket terbatas untuk kategori **Meet & Greet Package**!",
                "Catatan: Pastikan Anda tiba tepat waktu untuk menghindari antrian panjang dan menikmati seluruh pengalaman. Penukaran e-tiket dapat dimulai 2 jam sebelum pintu dibuka."
            ]
        ];

        return view('DetailKonser', compact('konser'));
    }
}
