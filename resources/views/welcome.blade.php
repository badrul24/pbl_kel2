<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Arsip - Politeknik Negeri Padang</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49',
                        },
                        secondary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                            950: '#2e1065',
                        }
                    }
                }
            }
        }
    </script>
    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm" x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-12 w-auto" src="https://pnp.ac.id/assets/img/logo.png" alt="PNP Logo">
                        <div class="ml-3">
                            <div class="text-primary-700 font-bold text-lg">SIARSIP</div>
                            <div class="text-gray-500 text-xs">Politeknik Negeri Padang</div>
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#beranda" class="border-primary-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Beranda
                        </a>
                        <a href="#fitur" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Fitur
                        </a>
                        <a href="#tentang" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Tentang
                        </a>
                        <a href="#kontak" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Kontak
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Masuk
                    </a>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                        <span class="sr-only">Buka menu utama</span>
                        <i class="fa-solid fa-bars h-6 w-6" x-show="!open"></i>
                        <i class="fa-solid fa-xmark h-6 w-6" x-show="open" style="display: none;"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="sm:hidden" x-show="open" style="display: none;">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#beranda" class="bg-primary-50 border-primary-500 text-primary-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Beranda
                </a>
                <a href="#fitur" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Fitur
                </a>
                <a href="#tentang" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Tentang
                </a>
                <a href="#kontak" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Kontak
                </a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="mt-3 space-y-1">
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">
                        Masuk
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="relative bg-gradient-to-r from-primary-600 to-primary-800 overflow-hidden">
        <div class="absolute inset-0">
            <svg class="absolute right-0 bottom-0 transform translate-x-1/2 opacity-20" width="404" height="404" fill="none" viewBox="0 0 404 404">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-white" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
            </svg>
            <svg class="absolute bottom-0 left-0 transform -translate-x-1/2 opacity-20" width="404" height="404" fill="none" viewBox="0 0 404 404">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa28" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-white" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa28)" />
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 relative">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">
                        Sistem Manajemen Arsip Digital
                    </h1>
                    <p class="mt-6 text-xl text-white opacity-90 max-w-3xl">
                        Kelola arsip kampus dengan mudah, cepat, dan aman. Solusi modern untuk pengelolaan dokumen Politeknik Negeri Padang.
                    </p>
                    <div class="mt-10 flex gap-4">
                        <a href="#fitur" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-primary-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-700 focus:ring-white">
                            Pelajari Lebih Lanjut
                        </a>
                        <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-900 bg-opacity-60 hover:bg-opacity-70 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-700 focus:ring-primary-900">
                            Masuk Sekarang
                        </a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <img src="https://images.unsplash.com/photo-1568667256549-094345857637?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Document Management" class="w-full h-auto rounded-lg shadow-xl">
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
                <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6 text-center">
                        <div class="text-5xl font-bold text-primary-600 mb-3">
                            <i class="fa-solid fa-file-archive"></i>
                        </div>
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Total Arsip
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            12,500+
                        </dd>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6 text-center">
                        <div class="text-5xl font-bold text-primary-600 mb-3">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Pengguna Aktif
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            250+
                        </dd>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6 text-center">
                        <div class="text-5xl font-bold text-primary-600 mb-3">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Jurusan & Unit
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            15
                        </dd>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6 text-center">
                        <div class="text-5xl font-bold text-primary-600 mb-3">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Waktu Pencarian
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            < 5 detik
                        </dd>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-primary-600 tracking-wide uppercase">Fitur Unggulan</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight">
                    Kelola Arsip dengan Mudah
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                    Sistem manajemen arsip yang dirancang khusus untuk kebutuhan Politeknik Negeri Padang
                </p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature 1 -->
                    <div class="flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="flex-shrink-0 bg-primary-500 p-6 flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass text-white text-3xl"></i>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900">Pencarian Cepat</h3>
                                <p class="mt-3 text-base text-gray-500">
                                    Temukan arsip yang Anda butuhkan dalam hitungan detik dengan fitur pencarian canggih berdasarkan kata kunci, tanggal, kategori, dan metadata lainnya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="flex-shrink-0 bg-primary-500 p-6 flex items-center justify-center">
                            <i class="fa-solid fa-folder-tree text-white text-3xl"></i>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900">Kategorisasi Otomatis</h3>
                                <p class="mt-3 text-base text-gray-500">
                                    Sistem cerdas yang mengkategorikan arsip berdasarkan jenis, departemen, dan tahun secara otomatis untuk memudahkan pengelolaan dan penemuan kembali.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="flex-shrink-0 bg-primary-500 p-6 flex items-center justify-center">
                            <i class="fa-solid fa-lock text-white text-3xl"></i>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900">Keamanan Berlapis</h3>
                                <p class="mt-3 text-base text-gray-500">
                                    Lindungi arsip penting dengan sistem keamanan berlapis, termasuk enkripsi data, kontrol akses berbasis peran, dan log aktivitas lengkap.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="flex-shrink-0 bg-primary-500 p-6 flex items-center justify-center">
                            <i class="fa-solid fa-chart-line text-white text-3xl"></i>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900">Analitik & Laporan</h3>
                                <p class="mt-3 text-base text-gray-500">
                                    Dapatkan wawasan mendalam tentang penggunaan arsip dengan dashboard analitik dan laporan yang dapat disesuaikan untuk pengambilan keputusan yang lebih baik.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="flex-shrink-0 bg-primary-500 p-6 flex items-center justify-center">
                            <i class="fa-solid fa-mobile-screen text-white text-3xl"></i>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900">Akses Mobile</h3>
                                <p class="mt-3 text-base text-gray-500">
                                    Akses arsip dari mana saja dan kapan saja dengan antarmuka yang responsif dan dioptimalkan untuk perangkat mobile.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 6 -->
                    <div class="flex flex-col bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <div class="flex-shrink-0 bg-primary-500 p-6 flex items-center justify-center">
                            <i class="fa-solid fa-clock-rotate-left text-white text-3xl"></i>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-gray-900">Riwayat & Versi</h3>
                                <p class="mt-3 text-base text-gray-500">
                                    Lacak perubahan dokumen dengan sistem kontrol versi dan riwayat lengkap untuk memastikan integritas data dan kepatuhan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-primary-600 tracking-wide uppercase">Cara Kerja</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight">
                    Proses Pengelolaan Arsip
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                    Sistem yang sederhana namun powerful untuk mengelola seluruh siklus hidup arsip
                </p>
            </div>

            <div class="mt-16">
                <div class="relative">
                    <!-- Steps -->
                    <div class="relative z-10">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                            <!-- Step 1 -->
                            <div class="relative flex flex-col items-center">
                                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-primary-100 text-primary-600 text-2xl font-bold border-4 border-white shadow-lg mb-4">
                                    1
                                </div>
                                <h3 class="text-lg font-medium text-gray-900 text-center">Unggah Dokumen</h3>
                                <p class="mt-2 text-sm text-gray-500 text-center">
                                    Unggah dokumen fisik yang telah dipindai atau dokumen digital langsung ke sistem
                                </p>
                            </div>

                            <!-- Step 2 -->
                            <div class="relative flex flex-col items-center">
                                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-primary-100 text-primary-600 text-2xl font-bold border-4 border-white shadow-lg mb-4">
                                    2
                                </div>
                                <h3 class="text-lg font-medium text-gray-900 text-center">Klasifikasi & Metadata</h3>
                                <p class="mt-2 text-sm text-gray-500 text-center">
                                    Tambahkan metadata dan klasifikasikan dokumen berdasarkan kategori yang sesuai
                                </p>
                            </div>

                            <!-- Step 3 -->
                            <div class="relative flex flex-col items-center">
                                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-primary-100 text-primary-600 text-2xl font-bold border-4 border-white shadow-lg mb-4">
                                    3
                                </div>
                                <h3 class="text-lg font-medium text-gray-900 text-center">Penyimpanan & Pengindeksan</h3>
                                <p class="mt-2 text-sm text-gray-500 text-center">
                                    Sistem menyimpan dan mengindeks dokumen untuk pencarian cepat
                                </p>
                            </div>

                            <!-- Step 4 -->
                            <div class="relative flex flex-col items-center">
                                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-primary-100 text-primary-600 text-2xl font-bold border-4 border-white shadow-lg mb-4">
                                    4
                                </div>
                                <h3 class="text-lg font-medium text-gray-900 text-center">Akses & Penggunaan</h3>
                                <p class="mt-2 text-sm text-gray-500 text-center">
                                    Temukan dan gunakan dokumen dengan mudah sesuai dengan hak akses yang dimiliki
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Connecting Line -->
                    <div class="absolute top-8 w-full hidden md:block">
                        <div class="h-1 bg-gray-200 w-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-primary-600 tracking-wide uppercase">Testimoni</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight">
                    Apa Kata Pengguna
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-primary-100 flex items-center justify-center">
                            <span class="text-primary-700 font-bold text-xl">D</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold">Dr. Dedi Irawan</h4>
                            <p class="text-gray-500">Ketua Jurusan Teknik Elektro</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Sistem ini telah mengubah cara kami mengelola arsip jurusan. Pencarian dokumen yang dulunya memakan waktu berjam-jam, kini hanya dalam hitungan detik."
                    </p>
                    <div class="mt-4 flex text-primary-500">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-primary-100 flex items-center justify-center">
                            <span class="text-primary-700 font-bold text-xl">S</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold">Siti Rahma</h4>
                            <p class="text-gray-500">Staff Administrasi Akademik</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Sangat membantu dalam pekerjaan sehari-hari. Dokumen tersimpan dengan rapi dan mudah ditemukan kembali. Tidak perlu lagi mencari berkas fisik di lemari arsip yang penuh debu."
                    </p>
                    <div class="mt-4 flex text-primary-500">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-alt"></i>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-primary-100 flex items-center justify-center">
                            <span class="text-primary-700 font-bold text-xl">F</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold">Fajar Pratama</h4>
                            <p class="text-gray-500">Mahasiswa Teknik Informatika</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Sebagai asisten lab, saya sering membutuhkan akses cepat ke dokumen praktikum. Sistem ini membuat semuanya lebih efisien dan terorganisir dengan baik."
                    </p>
                    <div class="mt-4 flex text-primary-500">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-base font-semibold text-primary-600 tracking-wide uppercase">Tentang Kami</h2>
                    <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight">
                        Politeknik Negeri Padang
                    </p>
                    <p class="mt-5 text-lg text-gray-500">
                        Politeknik Negeri Padang (PNP) adalah perguruan tinggi vokasi negeri yang berlokasi di Kota Padang, Sumatera Barat. Didirikan pada tahun 1987, PNP telah menjadi salah satu institusi pendidikan vokasi terkemuka di Indonesia.
                    </p>
                    <p class="mt-4 text-lg text-gray-500">
                        Sistem Manajemen Arsip Digital ini dikembangkan sebagai bagian dari inisiatif digitalisasi kampus untuk meningkatkan efisiensi dan efektivitas pengelolaan dokumen di seluruh unit dan jurusan.
                    </p>
                    <div class="mt-8">
                        <a href="https://pnp.ac.id" target="_blank" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Kunjungi Website PNP
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" src="https://pnp.ac.id/assets/img/gedung.jpg" alt="Gedung PNP">
                        </div>
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" src="https://pnp.ac.id/assets/img/kampus.jpg" alt="Kampus PNP">
                        </div>
                    </div>
                    <div class="space-y-4 mt-8">
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" src="https://pnp.ac.id/assets/img/mahasiswa.jpg" alt="Mahasiswa PNP">
                        </div>
                        <div class="aspect-w-3 aspect-h-2">
                            <img class="object-cover shadow-lg rounded-lg" src="https://pnp.ac.id/assets/img/lab.jpg" alt="Laboratorium PNP">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-primary-700">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Siap untuk memulai?</span>
                <span class="block text-primary-200">Akses sistem manajemen arsip sekarang.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-white hover:bg-primary-50">
                        Masuk
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="#kontak" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-500">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-primary-600 tracking-wide uppercase">Kontak</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight">
                    Hubungi Kami
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                    Punya pertanyaan atau butuh bantuan? Jangan ragu untuk menghubungi kami.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Contact Card 1 -->
                <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col items-center text-center">
                    <div class="h-16 w-16 bg-primary-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-location-dot text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Alamat</h3>
                    <p class="mt-2 text-base text-gray-500">
                        Kampus Politeknik Negeri Padang<br>
                        Limau Manis, Kec. Pauh<br>
                        Kota Padang, Sumatera Barat 25164
                    </p>
                </div>

                <!-- Contact Card 2 -->
                <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col items-center text-center">
                    <div class="h-16 w-16 bg-primary-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-phone text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Telepon</h3>
                    <p class="mt-2 text-base text-gray-500">
                        +62 751 72590<br>
                        +62 751 72576 (Fax)
                    </p>
                </div>

                <!-- Contact Card 3 -->
                <div class="bg-gray-50 rounded-lg shadow-md p-6 flex flex-col items-center text-center">
                    <div class="h-16 w-16 bg-primary-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-envelope text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Email</h3>
                    <p class="mt-2 text-base text-gray-500">
                        info@pnp.ac.id<br>
                        arsip@pnp.ac.id
                    </p>
                </div>
            </div>

            <div class="mt-16 bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-6 sm:p-10">
                        <h3 class="text-2xl font-bold text-gray-900">Kirim Pesan</h3>
                        <p class="mt-4 text-gray-500">
                            Isi formulir di bawah ini dan tim kami akan menghubungi Anda sesegera mungkin.
                        </p>
                        <form class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nama Depan</label>
                                <div class="mt-1">
                                    <input type="text" name="first-name" id="first-name" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                                <div class="mt-1">
                                    <input type="text" name="last-name" id="last-name" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="subject" class="block text-sm font-medium text-gray-700">Subjek</label>
                                <div class="mt-1">
                                    <input type="text" name="subject" id="subject" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                                <div class="mt-1">
                                    <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md"></textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="bg-gray-50 p-6 sm:p-10 flex items-center justify-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3056936183696!2d100.46099661475396!3d-0.9145129993076092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8cf891947c9%3A0x3989067f95c95071!2sPoliteknik%20Negeri%20Padang!5e0!3m2!1sid!2sid!4v1650123456789!5m2!1sid!2sid" width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center">
                        <img class="h-10 w-auto" src="https://pnp.ac.id/assets/img/logo.png" alt="PNP Logo">
                        <div class="ml-3">
                            <div class="text-white font-bold text-lg">SIARSIP</div>
                            <div class="text-gray-400 text-xs">Politeknik Negeri Padang</div>
                        </div>
                    </div>
                    <p class="mt-4 text-base text-gray-400">
                        Sistem Manajemen Arsip Digital Politeknik Negeri Padang. Solusi modern untuk pengelolaan dokumen kampus yang efisien, aman, dan terintegrasi.
                    </p>
                    <div class="mt-6 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fa-brands fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fa-brands fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fa-brands fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fa-brands fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">
                        Tautan Cepat
                    </h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="#beranda" class="text-base text-gray-400 hover:text-white">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="#fitur" class="text-base text-gray-400 hover:text-white">
                                Fitur
                            </a>
                        </li>
                        <li>
                            <a href="#tentang" class="text-base text-gray-400 hover:text-white">
                                Tentang
                            </a>
                        </li>
                        <li>
                            <a href="#kontak" class="text-base text-gray-400 hover:text-white">
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">
                        Tautan Eksternal
                    </h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="https://pnp.ac.id" class="text-base text-gray-400 hover:text-white">
                                Website PNP
                            </a>
                        </li>
                        <li>
                            <a href="https://siakad.pnp.ac.id" class="text-base text-gray-400 hover:text-white">
                                SIAKAD
                            </a>
                        </li>
                        <li>
                            <a href="https://elearning.pnp.ac.id" class="text-base text-gray-400 hover:text-white">
                                E-Learning
                            </a>
                        </li>
                        <li>
                            <a href="https://library.pnp.ac.id" class="text-base text-gray-400 hover:text-white">
                                Perpustakaan
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8">
                <p class="text-base text-gray-400 text-center">
                    &copy; 2023 Sistem Manajemen Arsip Digital - Politeknik Negeri Padang. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 p-3 bg-primary-600 text-white rounded-full shadow-lg opacity-0 transition-opacity duration-300">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <script>
        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('opacity-100');
                backToTopButton.classList.remove('opacity-0');
            } else {
                backToTopButton.classList.add('opacity-0');
                backToTopButton.classList.remove('opacity-100');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
