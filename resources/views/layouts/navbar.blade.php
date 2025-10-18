<!-- resources/views/layouts/navbar.blade.php -->
<header class="bg-white sticky top-0 z-50 shadow-md">
    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-2xl md:text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-indigo-600">Tcon</a>
        <div class="space-x-4 md:space-x-6 flex items-center">
            <a href="{{ url('/') }}" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Beranda</a>
            <a href="{{ route('konser') }}" class="text-base md:text-lg text-indigo-600 hover:text-indigo-800 font-bold transition-colors border-b-2 border-indigo-600 pb-1">Konser</a>
            <a href="#" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Artis</a>
            <a href="#" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Pesanan</a>
            <a href="#" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Hubungi Kami</a>
            <a href="#" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Moment</a>
        </div>
        <a href="#" class="text-indigo-600 hover:text-indigo-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-9 md:w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A9.972 9.972 0 0112 15c2.47 0 4.73.81 6.518 2.155M15 
                    12a3 3 0 11-6 0 3 3 0 016 0zM12 21a9 9 0 100-18 9 9 0 000 18z" />
            </svg>
        </a>
    </nav>
</header>
