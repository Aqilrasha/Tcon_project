
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page_title ?? 'Daftar Konser - Tcon' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        .concert-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
                        0 2px 4px -2px rgba(0, 0, 0, 0.06);
        }
        .concert-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
                        0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-100">

    {{-- NAVBAR --}}
    @include('layouts.navbar')

    <main class="p-4 sm:p-8">
        <div class="max-w-7xl mx-auto">

            <h2 class="text-4xl font-extrabold text-gray-900 text-center mb-10">
                Jadwal Konser & Festival Mendatang
            </h2>

            {{-- Search Bar --}}
            <section class="mb-10 bg-white p-6 rounded-xl shadow-lg border-t-4 border-red-500">
                <div class="flex flex-col lg:flex-row gap-4 items-center">
                    <div class="relative w-full lg:w-2/5">
                        <input id="search-input" type="text"
                            placeholder="Cari artis, lokasi, atau nama acara..."
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-full focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </section>

            {{-- Grid Daftar Konser --}}
            <div id="concert-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Copy semua card konser dari HTML kamu di sini tanpa ubah tampilan --}}
                {{-- Contoh satu card: --}}
                <div class="concert-card">
                    <div class="relative">
                        <img src="konser dewa.webp" alt="Dewa 19" class="w-full h-56 object-cover">
                        <div class="absolute top-4 left-4 bg-red-600 text-white font-bold px-4 py-2 rounded-lg text-sm shadow-xl">
                            28 DES 2024
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-3 bg-gradient-to-t from-black/70 to-transparent">
                            <h3 class="text-2xl font-extrabold text-white leading-tight">Dewa 19 All Stars 2.0</h3>
                        </div>
                    </div>

                    <div class="p-5 space-y-3">
                        <p class="text-sm font-medium text-gray-500 flex items-center">
                            <svg class="h-4 w-4 mr-1 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            SUGBK, Jakarta
                        </p>
                        <p class="text-gray-700 text-sm">
                            Perjalanan musik lintas era oleh Taylor Swift, menampilkan 10 album dalam satu panggung kolosal.
                        </p>
                        <div class="flex flex-wrap gap-2 text-xs font-semibold">
                            <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full">Pop Superstar</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full">Jakarta</span>
                        </div>
                        <div class="pt-3 flex justify-between items-center border-t border-gray-100">
                            <p class="text-xl font-bold text-gray-900">Mulai dari <span class="text-red-600">Rp 500.000</span></p>
                            <a href="#" class="bg-red-600 text-white font-bold py-2 px-4 rounded-full hover:bg-red-700 transition-colors shadow-lg text-sm">
                                Detail & Beli
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

   
 @include('layouts.footer')
</body>
</html>
