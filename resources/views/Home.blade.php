<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Menggunakan variabel dari Controller untuk title --}}
    <title>{{ $page_title ?? 'Beranda - Tcon' }}</title>
    
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
        /* Custom style for the active link border */
        .nav-link.active-tcon {
            font-weight: 700 !important;
            color: #6610f2 !important; /* Indigo-600 */
            border-bottom: 2px solid #6610f2;
            padding-bottom: 0.5rem;
            transition: all 0.3s;
        }
        /* Custom shadow for sections/cards */
        .shadow-tcon {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }
        .object-fit-cover {
            object-fit: cover;
        }
    </style>
</head>
<body class="bg-light">

     <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-tcon">
            <div class="container px-4 py-2">
                <a href="{{ route('home') }}" class="tcon-brand">Tcon</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav mx-auto space-x-md-4">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link active-tcon" aria-current="page">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('konser') }}" class="nav-link text-secondary fw-medium">Konser</a>
                        </li>
                         <li class="nav-item">
                       <a href="artis.html" class="nav-link text-secondary fw-medium">Artis</a>
                        </li>
                        <li class="nav-item">
                            <a href="riwayat_pembayaran.html" class="nav-link text-secondary fw-medium">Pesanan</a>
                        </li>
                        <li class="nav-item">
                            <a href="Contact_us.html" class="nav-link text-secondary fw-medium">Hubungi Kami</a>
                        </li>
                        <li class="nav-item">
                            <a href="liveGalery.html" class="nav-link text-secondary fw-medium">Moment</a>
                        </li>
                    </ul>
                </div>
                
                <a href="profil.html" class="text-indigo-600 ms-3 d-none d-lg-block">
                    <i class="bi bi-person-circle h3 mb-0 text-primary"></i>
                </a>
                
                <a href="profil.html" class="nav-link text-indigo-600 d-lg-none">
                    <i class="bi bi-person-circle h4 mb-0 text-primary"></i>
                </a>
            </div>
        </nav>
    </header>

    <main class="container p-4 p-md-5">
        
        <section class="position-relative bg-white rounded-3 shadow-tcon overflow-hidden mb-5">
            <div class="position-absolute w-100 h-100 opacity-50 z-0">
                <img src="indeg.jpg.jpeg" alt="Latar belakang hero" class="w-100 h-100 object-fit-cover">
            </div>
            
            <div class="position-relative z-1 p-4 p-md-5 text-center text-dark">
                <h1 class="display-5 fw-bolder mb-3 lh-sm">Temukan & Beli Tiket Konser Favorit Anda</h1>
                <p class="fs-5 text-secondary mb-4">Nikmati pengalaman tak terlupakan dengan musik live dari artis kesayangan Anda.</p>
               <a href="{{ route('konser') }}" class="btn btn-primary btn-lg fw-bold rounded-pill shadow-lg">
    Lihat Konser Mendatang
</a>

            </div>
        </section>

        <section class="mb-5 p-4 bg-white rounded-3 shadow-tcon">
            <h2 class="h3 fw-bold text-center mb-4 text-dark">Artis Populer</h2>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-4">
                <div class="col">
                    <a href="detail_artis.html" class="d-flex flex-column align-items-center text-center text-decoration-none text-dark">
                        <img src="juicy.webp" alt="Artis Juicy Lucy" class="rounded-circle border border-4 border-primary" style="width: 96px; height: 96px; object-fit: cover;">
                        <p class="mt-2 mb-0 fw-medium">Juicy Lucy</p>
                    </a>
                </div>
                <div class="col">
                    <a href="detail_artis.html" class="d-flex flex-column align-items-center text-center text-decoration-none text-dark">
                        <img src="arash buana.webp" alt="Artis Arash Buana" class="rounded-circle border border-4 border-primary" style="width: 96px; height: 96px; object-fit: cover;">
                        <p class="mt-2 mb-0 fw-medium">Arash Buana</p>
                    </a>
                </div>
                <div class="col">
                    <a href="detail_artis.html" class="d-flex flex-column align-items-center text-center text-decoration-none text-dark">
                        <img src="Shakira.webp" alt="Artis Shakira Jasmine" class="rounded-circle border border-4 border-primary" style="width: 96px; height: 96px; object-fit: cover;">
                        <p class="mt-2 mb-0 fw-medium">Shakira Jasmine</p>
                    </a>
                </div>
                <div class="col">
                    <a href="detail_artis.html" class="d-flex flex-column align-items-center text-center text-decoration-none text-dark">
                        <img src="tiara andini.png" alt="Artis Tiara Andini" class="rounded-circle border border-4 border-primary" style="width: 96px; height: 96px; object-fit: cover;">
                        <p class="mt-2 mb-0 fw-medium">Tiara Andini</p>
                    </a>
                </div>
                <div class="col">
                    <a href="detail_artis.html" class="d-flex flex-column align-items-center text-center text-decoration-none text-dark">
                        <img src="yodra.webp" alt="Artis Lyodra" class="rounded-circle border border-4 border-primary" style="width: 96px; height: 96px; object-fit: cover;">
                        <p class="mt-2 mb-0 fw-medium">Lyodra</p>
                    </a>
                </div>
                <div class="col">
                    <a href="detail_artis.html" class="d-flex flex-column align-items-center text-center text-decoration-none text-dark">
                        <img src="maudy ayunda.webp" alt="Artis Maudy Ayunda" class="rounded-circle border border-4 border-primary" style="width: 96px; height: 96px; object-fit: cover;">
                        <p class="mt-2 mb-0 fw-medium">Maudy Ayunda</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="mb-5 p-4 bg-white rounded-3 shadow-tcon">
            <h2 class="h3 fw-bold text-center mb-4 text-dark">Konser Unggulan</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <a href="detail_konser.html" class="card h-100 shadow-sm border-0 bg-light text-decoration-none">
                        <img src="konser dewa.webp" class="card-img-top object-fit-cover" alt="Konser Dewa 19 All Stars 2.0" style="height: 192px;">
                        <div class="card-body">
                            <h3 class="h5 card-title text-dark">Dewa 19 All Stars 2.0</h3>
                            <p class="card-text text-secondary mb-1">Dewa19</p>
                            <p class="card-text small text-muted mb-3">Stadion Utama GBK, Jakarta</p>
                            <p class="fs-5 fw-bold text-primary mt-2 mb-0">Mulai dari Rp 500.000</p>
                        </div>
                    </a>
                </div>
                
                <div class="col">
                    <a href="detail_konser.html" class="card h-100 shadow-sm border-0 bg-light text-decoration-none">
                        <img src="KonserThanksGod.jpg" class="card-img-top object-fit-cover" alt="Konser Thanks God IT's Festival (TGIF)" style="height: 192px;">
                        <div class="card-body">
                            <h3 class="h5 card-title text-dark">Thanks God IT's Festival (TGIF)</h3>
                            <p class="card-text text-secondary mb-1">Tulus, Nadin Amizah, Raisa, dll.</p>
                            <p class="card-text small text-muted mb-3">Stadion Utama GBK, Jakarta</p>
                            <p class="fs-5 fw-bold text-primary mt-2 mb-0">Mulai dari Rp 450.000</p>
                        </div>
                    </a>
                </div>
                
                <div class="col">
                    <a href="detail_konser.html" class="card h-100 shadow-sm border-0 bg-light text-decoration-none">
                        <img src="KonserCoolab.jpg" class="card-img-top object-fit-cover" alt="Konser CooLAb Fest" style="height: 192px;">
                        <div class="card-body">
                            <h3 class="h5 card-title text-dark">CooLAb Fest</h3>
                            <p class="card-text text-secondary mb-1">Hindia, Feast, dll.</p>
                            <p class="card-text small text-muted mb-3">Jakarta International Stadium</p>
                            <p class="fs-5 fw-bold text-primary mt-2 mb-0">Mulai dari Rp 300.000</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        
       <section class="mb-5 p-4 bg-white rounded-3 shadow-tcon border-start border-5 border-danger">
            <h2 class="h3 fw-bold text-center mb-4 text-dark">Bintang Sorotan: Tiara Andini</h2>
            
            <div class="row g-4 align-items-center">
                <div class="col-md-4 flex-shrink-0">
                    <img src="tiara andini.png" alt="Tiara Andini" class="img-fluid rounded-3 shadow-lg">
                </div>
                
                <div class="col-md-8">
                    <div class="space-y-3 text-secondary fs-6">
                        <p><strong>Tiara Andini</strong> bukan hanya seorang penyanyi, dia adalah **fenomena budaya global** dan salah satu penulis lagu paling brilian di generasinya. Dikenal karena kemampuannya menceritakan kisah yang mendalam, relatable, dan penuh emosi, musiknya telah menjadi **soundtrack bagi jutaan orang** di seluruh dunia. Daya tarik utamanya terletak pada **kejujuran liriknya** dan evolusinya yang konstan sebagai seorang seniman.</p>
                        
                        <h3 class="h5 fw-semibold text-primary mt-4">Pencapaian Penting</h3>
                        <ul class="list-unstyled space-y-1 ms-3">
                            <li class="d-flex align-items-baseline"><i class="bi bi-star-fill me-2 text-danger"></i>Memegang rekor **empat kali** memenangkan **Album Terbaik Tahun Ini** di Grammy Awards.</li>
                            <li class="d-flex align-items-baseline"><i class="bi bi-star-fill me-2 text-danger"></i>Memecahkan berbagai rekor penjualan album dan *streaming* di platform global.</li>
                            <li class="d-flex align-items-baseline"><i class="bi bi-star-fill me-2 text-danger"></i>Salah satu tur konsernya (The Eras Tour) menjadi tur dengan pendapatan tertinggi sepanjang masa.</li>
                        </ul>
                        
                        <p class="mt-3">Setiap "era" musiknya (dari country yang manis hingga pop sintetik yang mendominasi) selalu disambut antusias, membuktikan statusnya sebagai **ikon pop yang tak terbantahkan** dan inspirasi bagi musisi baru.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-4 bg-light rounded-3 shadow-tcon border-start border-5 border-primary">
            <h2 class="h3 fw-bold text-center mb-4 text-dark">Pengalaman Konser Wajib Tonton: Coolab Feast</h2>
            
            <div class="row g-4 flex-row-reverse align-items-center">
                <div class="col-md-4 flex-shrink-0">
                    <img src="KonserCoolab.jpg" alt="Coolab Feast" class="img-fluid rounded-3 shadow-lg">
                </div>
                
                <div class="col-md-8">
                    <div class="space-y-3 text-secondary fs-6">
                        <p><strong>Coolab Feast</strong> adalah perayaan monumental dari seluruh diskografi Taylor Swift. Konser ini bertema **"perjalanan melintasi era musik"** sang bintang, di mana setiap segmen didedikasikan untuk album tertentu (*Fearless, 1989, Reputation, Midnights*, dll.), lengkap dengan kostum, visual, dan setlist yang unik. Ini adalah malam yang **menghormati seluruh kariernya**.</p>
                        
                        <h3 class="h5 fw-semibold text-danger mt-4">Atmosfer yang Dijanjikan</h3>
                        <p>Bayangkan malam yang penuh **energi masif, nostalgia mendalam, dan kegembiraan kolektif** dari ribuan penggemar. Atmosfernya dirancang untuk menjadi **spektakuler, imersif, dan emosional**, dengan produksi panggung yang megah, efek visual yang menakjubkan, dan tata cahaya yang sinematik. Anda akan merasakan setiap emosi di setiap era.</p>
                        
                        <h3 class="h5 fw-semibold text-danger mt-4">Mengapa Konser Ini Wajib Dihadiri?</h3>
                        <p>Ini lebih dari sekadar konser; ini adalah **momen sekali seumur hidup** untuk menyaksikan seorang superstar di puncak kemampuannya. Anda akan menyanyikan lebih dari 40 lagu hits dari berbagai dekade, dikelilingi oleh **produksi panggung paling megah di dunia**. Sebuah tontonan visual, musik, dan emosi yang **mutlak tak boleh dilewatkan** oleh penggemar musik manapun!</p>
                    </div>
                    <a href="detail_konser.html" class="btn btn-danger fw-bold rounded-pill shadow-lg mt-4">Pesan Tiket Sekarang</a>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-dark text-white p-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 Tcon. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
