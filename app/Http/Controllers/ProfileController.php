<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   /**
     * Menampilkan halaman profil pengguna.
     */
    public function show()
    {
        $user = (object)[
            'name' => 'Athaya Sha', 
            'email' => 'user.default@tcon.id', 
            'phone' => '08123456789', 
            'dob' => '1991-01-01',
            'bio' => 'Penggemar musik sejati dan sering berburu tiket konser.',
            'profile_picture' => 'https://placehold.co/192x192/4f46e5/ffffff?text=Pengguna'
        ];

        $status = session('status');
        return view('profile', compact('user', 'status')); 
    }

    /**
     * Menangani pembaruan informasi profil.
     */
    public function update(Request $request)
    {   
        return redirect()->route('profile.show')->with('status', 'Profil berhasil diperbarui!');
    }

    /**
     * Menangani proses logout.
     */
    public function logout(Request $request)
    {
        return redirect('/')->with('status', 'Anda berhasil keluar dari akun.');
    }
}
