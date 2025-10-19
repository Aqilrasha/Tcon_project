<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Konser | {{ $konser['judul'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        .ticket-card {
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            cursor: pointer;
            border: 2px solid transparent;
            padding: 1.25rem;
        }
        .ticket-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 20px -5px rgba(99, 102, 241, 0.2);
        }
        input[type="radio"]:checked + .ticket-card {
            border-color: #4f46e5;
            background-color: #e0e7ff;
            box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.2);
        }
        .modal-overlay {
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s, visibility 0.3s;
            z-index: 1000;
        }
        .modal-overlay.open {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-white sticky top-0 z-50 shadow-md">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl md:text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-indigo-600">Tcon</a>
            <div class="space-x-4 md:space-x-6 flex items-center">
                <a href="{{ url('/') }}" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Beranda</a>
                <a href="{{ url('/konser') }}" class="text-base md:text-lg text-indigo-600 hover:text-indigo-800 font-bold transition-colors border-b-2 border-indigo-600 pb-1">Konser</a>
                <a href="{{ url('/artis') }}" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Artis</a>
                <a href="{{ url('/riwayat_pembayaran') }}" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Pesanan</a>
                <a href="{{ url('/contact_us') }}" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Hubungi Kami</a>
                <a href="{{ url('/liveGalery') }}" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Moment</a>
            </div>
            <a href="{{ url('/profil') }}" class="text-indigo-600 hover:text-indigo-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-9 md:w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9.972 9.972 0 0112 15c2.47 0 4.73.81 6.518 2.155M15 12a3 3 0 11-6 0 3 3 0 016 0zM12 21a9 9 0 100-18 9 9 0 000 18z" />
                </svg>
            </a>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main class="p-4 sm:p-8 min-h-screen pb-24">
        <div class="max-w-6xl mx-auto space-y-10">
            
            <!-- Poster -->
            <section class="bg-white rounded-xl shadow-2xl overflow-hidden">
                <div class="h-64 md:h-96 w-full bg-cover bg-center relative" style="background-image: url('{{ asset($konser['gambar']) }}');">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-end p-8">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight">
                            {{ $konser['judul'] }}
                        </h1>
                        <p class="text-xl md:text-2xl text-indigo-300 font-medium mt-1">
                            Merayakan Cerita dan Melodi Indie Pop Terbaik
                        </p>
                    </div>
                </div>
            </section>

            <!-- Isi -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-8">
                    <section class="bg-white p-6 rounded-xl shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2">Tentang Konser</h3>
                        <div class="prose max-w-none text-gray-700 space-y-4">
                            @foreach ($konser['deskripsi'] as $paragraf)
                                <p>{!! $paragraf !!}</p>
                            @endforeach
                        </div>
                    </section>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1 space-y-8">
                    <section class="bg-white p-6 rounded-xl shadow-2xl sticky top-24 border-l-4 border-indigo-500 hidden lg:block">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Siap Memesan Tiket?</h3>
                        <div class="text-gray-600 mb-6">
                            <p>Klik tombol di bawah untuk memilih kategori tiket dan kuantitas di modal *checkout* layar penuh.</p>
                            <p class="mt-1 text-sm font-semibold text-indigo-600" id="current-selection">
                                Kategori terpilih: Meet & Greet
                            </p>
                        </div>
                        <button onclick="openModal()" class="w-full bg-indigo-600 text-white font-bold py-4 px-6 rounded-full shadow-lg hover:bg-indigo-700 transition-colors transform hover:scale-[1.01] flex items-center justify-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span>Pesan Tiket Sekarang</span>
                        </button>
                    </section>

                    <section class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-indigo-500">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Waktu & Tempat</h3>
                        <div class="space-y-3 text-gray-700">
                            <div class="flex items-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h.01M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-semibold">{{ $konser['tanggal'] }}</p>
                                    <p class="text-sm">Pintu Buka: 18:00 WIB | Pertunjukan Mulai: 20:00 WIB</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div>
                                    <p class="font-semibold">{{ $konser['lokasi'] }}</p>
                                    <p class="text-sm">Gedung Balai Sarbini, Jakarta Selatan. Kapasitas Venue Intimate.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            
            <!-- 9. Informasi Tambahan (Aturan, FAQ) -->
            <section class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-gray-300">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Informasi Penting & FAQ</h3>
                <div class="grid md:grid-cols-2 gap-8 text-gray-700">
                    <div>
                        <h4 class="text-xl font-semibold text-indigo-600 mb-2">Peraturan Konser (Wajib Dibaca)</h4>
                        <ul class="list-disc list-inside space-y-1 ml-4 text-sm">
                            <li>Dilarang membawa kamera profesional atau alat rekam video.</li>
                            <li>Wajib menunjukkan kartu identitas dan e-tiket yang sah saat penukaran.</li>
                            <li>Pintu venue ditutup 30 menit setelah konser dimulai.</li>
                            <li>Pembatalan atau perubahan jadwal tiket tidak dapat dilakukan.</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold text-indigo-600 mb-2">Barang yang Diizinkan & Dilarang</h4>
                        <p class="text-sm">
                            <span class="font-semibold text-green-700">Diizinkan:</span> Tas kecil (maks. ukuran A4), power bank, obat-obatan pribadi.
                            <br>
                            <span class="font-semibold text-red-700">Dilarang Keras:</span> Senjata tajam, botol kaca, rokok/vape, payung berujung tajam, spanduk besar.
                        </p>
                        <p class="mt-3 text-sm">
                            <span class="font-semibold">Hubungi Kami:</span> Jika ada pertanyaan lebih lanjut, silakan cek <a href="Contact_us.html" class="text-indigo-500 hover:underline">halaman FAQ kami</a>.
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <!-- Modal + Script -->
    {{-- Semua script JS bawaan tetap sama --}}
    <script>
        // Script JS kamu di sini (ditempel tanpa ubah)
    </script>

   @include('layouts.footer')
</body>
</html>
