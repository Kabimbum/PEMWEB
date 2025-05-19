<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Data Pelanggan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center px-4 bg-gradient-to-br from-purple-100 via-purple-200 to-white">

    <div class="max-w-5xl w-full bg-white shadow-2xl rounded-3xl overflow-hidden flex flex-col md:flex-row">
        
        <!-- Gambar Ilustrasi -->
        <div class="md:w-1/2 hidden md:flex items-center justify-center bg-purple-100 p-10">
        <img src="{{ asset('Assets/Login-amico.png') }}" 
            alt="Ilustrasi Login" 
            class="rounded-xl shadow-xl max-w-xs" />

        </div>

        <!-- Login / Redirect Section -->
        <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-purple-700">Sistem Manajemen Barang Ekspor & Impor</h2>
                <p class="text-gray-600 mt-2">Solusi cerdas mencatat barang Ekspor impor</p>
            </div>

            @if (Route::has('filament.admin.auth.login'))
                <div class="text-center">
                    @auth
                        <a href="{{ route('filament.admin.pages.dashboard') }}"
                           class="inline-block w-full md:w-auto px-8 py-3 rounded-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold shadow-lg transition transform hover:scale-105">
                            Masuk ke Dashboard
                        </a>
                    @else
                        <a href="{{ route('filament.admin.auth.login') }}"
                           class="inline-block w-full md:w-auto px-8 py-3 rounded-full bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 text-white font-semibold shadow-lg transition transform hover:scale-105 hover:brightness-110">
                            Login ke Admin
                        </a>
                    @endauth
                </div>
            @endif

            <p class="text-center text-sm text-gray-500 mt-6">
                Hak akses hanya diberikan untuk pengguna terdaftar.
            </p>
        </div>

    </div>

</body>
</html>
