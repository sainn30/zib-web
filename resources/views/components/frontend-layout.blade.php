<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Zona Instalasi Bandung') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb', // Blue 600
                        secondary: '#1e40af', // Blue 800
                        dark: '#111827', // Gray 900
                    },
                    fontFamily: {
                        sans: ['Figtree', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="font-sans antialiased text-gray-800 bg-white">

    <!-- Navbar -->
    <div class="fixed w-full z-50 top-6 px-4">
        <nav class="max-w-7xl mx-auto bg-white rounded-2xl shadow-lg border border-gray-100/50 pl-6 pr-4 py-4 md:py-3 transition-all duration-300"
            id="navbar">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img class="h-10 w-auto" src="{{ asset('images/logo.png') }}" alt="Zona Instalasi Bandung">
                    </a>
                </div>

                <!-- Right Side: Menu + CTA -->
                <div class="hidden md:flex items-center gap-8">
                    <!-- Desktop Menu -->
                    <div class="flex space-x-1 items-center">
                        <a href="{{ route('home') }}" class="nav-link px-4 py-2 font-medium text-md transition-colors"
                            data-target="home">Beranda</a>
                        <a href="{{ route('services') }}"
                            class="nav-link px-4 py-2 font-medium text-md transition-colors"
                            data-target="services">Layanan</a>
                        <a href="{{ route('home') }}#keunggulan"
                            class="nav-link px-4 py-2 font-medium text-md transition-colors"
                            data-target="keunggulan">Keunggulan</a>
                        <a href="{{ route('home') }}#about"
                            class="nav-link px-4 py-2 font-medium text-md transition-colors"
                            data-target="about">Tentang</a>
                        <a href="{{ route('home') }}#clients"
                            class="nav-link px-4 py-2 font-medium text-md transition-colors"
                            data-target="clients">Klien</a>
                        <a href="{{ route('home') }}#gallery"
                            class="nav-link px-4 py-2 font-medium text-md transition-colors"
                            data-target="gallery">Galeri</a>
                    </div>

                    <!-- CTA Button -->
                    <div class="flex items-center">
                        <a href="{{ route('home') }}#contact"
                            class="px-6 py-2.5 bg-blue-50 text-primary font-semibold rounded-lg hover:bg-blue-100 transition-all text-md shadow-sm ring-1 ring-blue-100 text-md">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex items-center md:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </nav>
    </div>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 pt-16 pb-8 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row justify-between gap-12">
                <!-- Brand Info -->
                <div class="lg:w-1/3 space-y-4">
                    <img class="h-14 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
                    <p class="text-gray-500 text-[16px] leading-relaxed max-w-xs">
                        Solusi Instalasi dan Maintenance gedung pengalaman, serta komitmen terhadap keamanan dan
                        kualitas.
                    </p>
                </div>

                <!-- Navigation Grid -->
                <div class="lg:w-2/3 grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                    <!-- Layanan Utama -->
                    <div>
                        <h3 class="font-bold text-gray-900 mb-4">Layanan Utama</h3>
                        <ul class="space-y-2 text-md text-gray-600">
                            <li><a href="#" class="hover:text-primary transition-colors">Instalasi Listrik</a></li>
                            <li><a href="#" class="hover:text-primary transition-colors">Panel Listrik</a></li>
                            <li><a href="#" class="hover:text-primary transition-colors">Sistem Kelistrikan</a></li>
                            <li><a href="#" class="hover:text-primary transition-colors">Maintenance</a></li>
                        </ul>
                    </div>

                    <!-- Info Tambahan -->
                    <div>
                        <h3 class="font-bold text-gray-900 mb-4">Info Tambahan</h3>
                        <ul class="space-y-2 text-md text-gray-600">
                            <li><a href="#" class="hover:text-primary transition-colors">Tentang Kami</a></li>
                            <li><a href="#" class="hover:text-primary transition-colors">Kebijakan Privasi</a></li>
                            <li><a href="#" class="hover:text-primary transition-colors">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>

                    <!-- Kontak -->
                    <div>
                        <h3 class="font-bold text-gray-900 mb-4">Hubungi Kami</h3>
                        <ul class="space-y-2 text-md text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-2 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <span>+62 821-2054-1517</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-2 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span>zonainstalasi@gmail.com</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-primary mr-2 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>
                                    Jl. Taman Kopo Indah I No. 60
                                    Bandung, Jawa Barat
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="pt-20 flex flex-col md:flex-row justify-center items-center text-center md:text-left">
                <p class="text-gray-400 text-xs">© 2026 Zona Instalasi Bandung. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <!-- Social Icons can go here -->
                </div>
            </div>

        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navLinks = document.querySelectorAll('.nav-link');
            const activeClasses = ['text-primary', 'font-bold'];
            const inactiveClasses = ['text-gray-600', 'font-medium'];

            function setActive(targetLink) {
                // Reset all
                navLinks.forEach(link => {
                    link.classList.remove(...activeClasses);
                    link.classList.add(...inactiveClasses);
                    // Ensure icon color also resets if any (though we use text-color inheritance)
                });

                // Set active
                if (targetLink) {
                    targetLink.classList.remove(...inactiveClasses);
                    targetLink.classList.add(...activeClasses);
                }
            }

            // 1. Initial State based on URL
            const currentPath = window.location.pathname;
            const currentHash = window.location.hash;

            if (currentPath.includes('/layanan')) {
                setActive(document.querySelector('a[data-target="services"]'));
            } else if (currentPath === '/' || currentPath === '') {
                // We are home. Check hash.
                if (currentHash) {
                    const hashTarget = currentHash.replace('#', '');
                    const link = document.querySelector(`a[data-target="${hashTarget}"]`);
                    if (link) setActive(link);
                    else setActive(document.querySelector('a[data-target="home"]'));
                } else {
                    setActive(document.querySelector('a[data-target="home"]'));
                }
            }

            // 2. Click Handling
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    setActive(link);
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>