<!DOCTYPE html>
<html lang="id">
<head>
    <title>Profil Pengguna | Tcon</title>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        /* Styling untuk Foto Profil */
        .profile-picture-container {
            width: 12rem;
            height: 12rem;
            border-radius: 9999px;
            background-color: #d1d5db;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            border: 4px solid #4f46e5; /* indigo-600 */
            transition: all 0.3s ease;
        }
        .profile-picture-container input[type="file"] {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
        .profile-picture-container:hover .overlay {
            opacity: 1;
        }
        .overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        /* Style untuk input form */
        input:focus, textarea:focus, select:focus {
            --tw-ring-color: #4f46e5; /* Warna ungu indigo untuk fokus */
            border-color: #4f46e5;
        }
    </style>
    </head>
<body class="bg-gray-100">


     <!-- Header & Navigasi -->
    <header class="bg-white sticky top-0 z-50 shadow-md">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="index.php" class="text-2xl md:text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-indigo-600">Tcon</a>
            <div class="space-x-4 md:space-x-6 flex items-center">
                <a href="{{ url('/') }}" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Beranda</a>
            <a href="{{ route('konser') }}" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Konser</a>
            <a href="{{ route('artis.list') }}" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Artis</a>
            <a href="#" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Pesanan</a>
            <a href="#" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Hubungi Kami</a>
            <a href="#" class="text-base md:text-lg text-gray-600 hover:text-gray-900 font-medium transition-colors">Moment</a>
            </div>
             <a href="{{ route('profile.show') }}" class="text-indigo-600 hover:text-indigo-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-9 md:w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9.972 9.972 0 0112 15c2.47 0 4.73.81 6.518 2.155M15 12a3 3 0 11-6 0 3 3 0 016 0zM12 21a9 9 0 100-18 9 9 0 000 18z" />
                </svg>
            </a>
        </nav>
    </header>

    <main class="p-4 md:p-8">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-2xl p-6 md:p-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 text-center mb-8">Pengaturan Profil & Akun</h2>
            
            {{-- Pesan Status dari Controller (setelah update berhasil) --}}
            @if (session('status'))
                <div class="bg-green-100 text-green-700 p-3 rounded-lg text-center font-medium mb-6">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col items-center mb-8 pb-6 border-b border-gray-200">
                <div class="profile-picture-container group">
                    <img id="profile-image" src="{{ $user->profile_picture }}" alt="Foto Profil" class="w-full h-full object-cover rounded-full">
                    <input type="file" accept="image/*" id="file-upload">
                    <div class="overlay rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.865-1.531A2 2 0 0112 4h1a2 2 0 011.664.89l.865 1.531A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                </div>
                {{-- Menggunakan data dari Controller --}}
                <p class="text-3xl font-semibold text-gray-900 mt-4" id="greeting-name">Halo, {{ $user->name ? explode(' ', $user->name)[0] : 'Pengguna' }} Tcon!</p>
                <p class="text-gray-600 text-base mt-1 text-center">Kelola data pribadi dan preferensi akun Anda di sini.</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Informasi Dasar</h3>
                    {{-- Form action menunjuk ke rute update --}}
                    <form action="{{ route('profile.update') }}" method="POST" id="profile-form" class="space-y-4">
                        @csrf 
                        
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700">Nama Lengkap</label>
                            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" placeholder="Masukkan nama lengkap Anda" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-base p-3 border">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700">Alamat Email</label>
                            <input type="email" id="email" name="email" value="{{ $user->email }}" disabled class="mt-1 block w-full rounded-lg bg-gray-100 text-gray-500 border-gray-300 shadow-sm text-base p-3 border cursor-not-allowed">
                            <p class="text-xs text-gray-500 mt-1">Email tidak dapat diubah.</p>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Contoh: 08123456789" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-base p-3 border">
                        </div>

                        <div>
                            <label for="dob" class="block text-sm font-semibold text-gray-700">Tanggal Lahir</label>
                            <input type="date" id="dob" name="dob" value="{{ old('dob', $user->dob) }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-base p-3 border">
                        </div>
                        
                        <div>
                            <label for="bio" class="block text-sm font-semibold text-gray-700">Bio Singkat</label>
                            <textarea id="bio" name="bio" rows="3" placeholder="Ceritakan sedikit tentang diri Anda..." class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-base p-3 border">{{ old('bio', $user->bio) }}</textarea>
                        </div>
                        
                        <div id="status-message" class="hidden text-sm p-3 rounded-lg text-center" role="alert"></div>

                        <div class="pt-4">
                            <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-indigo-700 transition-transform transform hover:scale-105">
                                Simpan Informasi Profil
                            </button>
                        </div>
                    </form>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Pengaturan Akun</h3>

                    <div class="bg-gray-50 p-4 rounded-lg shadow-sm mb-6 border border-gray-200">
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Keamanan</h4>
                        <button onclick="showChangePasswordModal()" class="w-full text-left flex justify-between items-center px-4 py-3 bg-white rounded-md border border-gray-300 hover:bg-gray-100 transition-colors">
                            <span>Ubah Kata Sandi</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414V16a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3z" clip-rule="evenodd" /></svg>
                        </button>
                        <p class="text-xs text-gray-500 mt-2">Lindungi akun Anda dengan mengganti kata sandi secara berkala.</p>
                    </div>

                    <div class="mt-8 pt-4 border-t border-gray-200">
                        {{-- Menggunakan form POST untuk Logout sesuai konvensi Laravel --}}
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full text-center bg-red-600 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-red-700 transition-transform transform hover:scale-105">
                                Keluar (Logout)
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white p-8 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Tcon. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        const initialUserData = {
            name: "{{ $user->name }}",
            email: "{{ $user->email }}",
            phone: "{{ $user->phone }}",
            dob: "{{ $user->dob }}",
            bio: "{{ $user->bio }}",
            isLoggedIn: true,
            password: "tcondefaultpassword"
        };
        const fileUpload = document.getElementById('file-upload');
        let userData = { ...initialUserData };

        function loadUserProfile() {
            if (userData.isLoggedIn) {
                const currentName = document.getElementById('name').value.trim();
                const firstName = currentName ? currentName.split(' ')[0] : 'Pengguna';
                greetingName.textContent = `Halo, ${firstName} Tcon!`;
            } else {
                greetingName.textContent = "Anda Belum Login";
            }
        }
        window.onload = loadUserProfile;
    </script>
</body>
</html>