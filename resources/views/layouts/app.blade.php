<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Blade Section for Title --}}
    <title>@yield('title', 'Tcon App')</title> 
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa; /* bg-light */
        }
        /* Custom gradient for brand logo */
        .tcon-brand {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(to right, #dc3545, #6610f2); 
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }
        /* Active link style - menggunakan class 'active-page' yang akan dikirim dari view */
        .nav-link.active-tcon {
            font-weight: 700 !important;
            color: #6610f2 !important; /* Primary color */
            border-bottom: 2px solid #6610f2;
            padding-bottom: 0.5rem;
        }
        /* Custom shadow for sections/cards */
        .shadow-tcon {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }
        .object-fit-cover {
            object-fit: cover;
        }
        :root {
            --bs-indigo: #6610f2; 
        }
        /* Style card tambahan dari halaman Artis */
        .artist-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out, border-bottom 0.2s ease-in-out;
            border-bottom: 5px solid transparent; 
        }
        .artist-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2) !important;
            border-bottom-color: var(--bs-indigo); 
        }
    </style>
    
    {{-- Blade Section for additional CSS or Head elements --}}
    @yield('styles') 
</head>
<body class="bg-light">

    {{-- 1. Navbar dipanggil di sini --}}
    @include('layouts.navbar')

    {{-- 2. Konten Utama akan dimasukkan di sini --}}
    <main class="container p-4 p-md-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-white p-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 Tcon. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    {{-- Blade Section for additional JS scripts --}}
    @yield('scripts')
</body>
</html>