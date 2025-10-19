<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisController extends Controller
{
      /**
     * Menampilkan daftar artis.
     */
    public function list()
    {
        // Data tiruan (mock data) artis.
        // Dalam aplikasi nyata, data ini diambil dari database (e.g., Artist::all()).
        $artists = [
            (object)[
                'name' => 'Arash Buana', 
                'genre' => 'Pop Superstar', 
                'image' => 'assets/images/arash buana.webp', 
                'border_color' => 'border-pink-500'
            ],
            (object)[
                'name' => 'Shakira Jasmine', 
                'genre' => 'Rock Alternatif', 
                'image' => 'assets/images/Shakira.webp', 
                'border_color' => 'border-blue-500'
            ],
            (object)[
                'name' => 'Tiara Andini', 
                'genre' => 'Acoustic Pop', 
                'image' => 'assets/images/tiara andini.png', 
                'border_color' => 'border-orange-500'
            ],
            (object)[
                'name' => 'Maudy Ayunda', 
                'genre' => 'Solo', 
                'image' => 'https://placehold.co/150x150/f06292/ffffff?text=MA',
                'border_color' => 'border-pink-500'
            ],
            (object)[
                'name' => 'Juicy Luicy', 
                'genre' => 'Pop / R&B', 
                'image' => 'assets/images/juicy.webp', 
                'border_color' => 'border-yellow-600'
            ],
            (object)[
                'name' => 'Sheila On 7', 
                'genre' => 'Lokal / Pop Rock', 
                'image' => 'assets/images/sheila.webp', 
                'border_color' => 'border-green-500'
            ],
            (object)[
                'name' => 'Tulus', 
                'genre' => 'Lokal / Jazz Pop', 
                'image' => 'assets/images/tulus.webp', 
                'border_color' => 'border-gray-600'
            ],
            (object)[
                'name' => 'Lyodra', 
                'genre' => 'Pop / Dance', 
                'image' => 'assets/images/yodra.webp', 
                'border_color' => 'border-purple-500'
            ],
            (object)[
                'name' => 'Raisa', 
                'genre' => 'Lokal / R&B', 
                'image' => 'assets/images/raisa.webp', 
                'border_color' => 'border-red-300'
            ],
        ];

        // Mengirim data $artists ke view
        return view('artis.list', compact('artists'));
    }
}
