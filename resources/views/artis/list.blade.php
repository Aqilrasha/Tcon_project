<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artis - Tcon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        .artist-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            border-bottom: 5px solid transparent; 
        }
        .artist-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-bottom-color: #6366f1; 
        }
    </style>
</head>
<body class="bg-gray-100">

    {{-- MEMANGGIL NAVBAR --}}
    @include('layouts.navbar')

    <main class="p-4 sm:p-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-extrabold text-gray-900 text-center mb-10">Direktori Artis Musik Pilihan</h2>
            
            <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">Telusuri artis favorit Anda dari berbagai genre, mulai dari superstar global hingga bintang lokal kebanggaan Indonesia.</p>

            <section class="mb-10 bg-white p-6 rounded-xl shadow-lg border-t-4 border-indigo-500">
                <div class="flex flex-col md:flex-row gap-4 items-center">
                    <div class="relative w-full md:w-3/5">
                        <input id="artist-search-input" type="text" placeholder="Cari nama artis, grup, atau genre..." class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-full focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </div>
                </div>
            </section>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
                
                {{-- Melakukan loop pada data $artists yang dikirim dari controller --}}
                @foreach ($artists as $artist)
                    <a href="{{ url('detail_artis.php') }}" class="artist-card block bg-white rounded-xl shadow-lg p-6 text-center" data-genre="{{ $artist->genre }}">
                        {{-- Menggunakan asset() helper untuk memuat gambar dari folder public/assets/images --}}
                        <img src="{{ asset($artist->image) }}" alt="{{ $artist->name }}" class="w-24 h-24 mx-auto rounded-full object-cover border-4 {{ $artist->border_color }}">
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">{{ $artist->name }}</h3>
                        <p class="text-sm text-gray-500">{{ $artist->genre }}</p>
                    </a>
                @endforeach
                
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white p-8 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Tcon. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>