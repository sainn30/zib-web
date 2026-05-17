<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Zona Instalasi Bandung') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1e40af',
                        dark: '#111827',
                    },
                    fontFamily: {
                        sans: ['Figtree', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 20s linear infinite;
        }

        .marquee-container:hover .animate-marquee {
            animation-play-state: paused;
        }

        /* ── Navbar blur (sama doc1) ── */
        .nav-blur {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        /* ── Mobile drawer ── */
        #mobile-menu {
            display: none;
        }

        #mobile-menu.open {
            display: flex;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="font-sans antialiased text-gray-800 bg-white">

    {{-- ================================================================ --}}
    {{-- NAVBAR — UI sama persis doc1 (frosted glass, full-width, h-20) --}}
    {{-- ================================================================ --}}
    <header class="fixed top-0 w-full z-50 bg-white/80 nav-blur border-b border-slate-200/50 shadow-xl"
        style="box-shadow: 0 20px 40px rgba(15,76,129,0.05);">
        <div class="max-w-[1280px] mx-auto flex justify-between items-center px-8 h-20">

            {{-- Logo / Brand (sama doc1: teks uppercase bold biru) --}}
            <a href="{{ route('home') }}"
                style="font-family:'Manrope',sans-serif;font-size:1.1rem;font-weight:900;color:#0F4C81;letter-spacing:-0.05em;text-transform:uppercase;text-decoration:none;">
                Zona Instalasi Bandung
            </a>

            {{-- Desktop Nav (sama doc1) --}}
            <nav class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="nav-link" data-target="home"
                    style="font-family:'Manrope',sans-serif;font-size:0.875rem;font-weight:600;letter-spacing:0.05em;color:#475569;text-decoration:none;transition:color 0.2s;"
                    onmouseenter="this.style.color='#0F4C81';"
                    onmouseleave="if(!this.classList.contains('nav-active'))this.style.color='#475569';">
                    Beranda
                </a>
                <a href="{{ route('services') }}" class="nav-link" data-target="services"
                    style="font-family:'Manrope',sans-serif;font-size:0.875rem;font-weight:600;letter-spacing:0.05em;color:#475569;text-decoration:none;transition:color 0.2s;"
                    onmouseenter="this.style.color='#0F4C81';"
                    onmouseleave="if(!this.classList.contains('nav-active'))this.style.color='#475569';">
                    Layanan
                </a>
                <a href="{{ route('home') }}#keunggulan" class="nav-link" data-target="keunggulan"
                    style="font-family:'Manrope',sans-serif;font-size:0.875rem;font-weight:600;letter-spacing:0.05em;color:#475569;text-decoration:none;transition:color 0.2s;"
                    onmouseenter="this.style.color='#0F4C81';"
                    onmouseleave="if(!this.classList.contains('nav-active'))this.style.color='#475569';">
                    Keunggulan
                </a>
                <a href="{{ route('home') }}#tentang" class="nav-link" data-target="tentang"
                    style="font-family:'Manrope',sans-serif;font-size:0.875rem;font-weight:600;letter-spacing:0.05em;color:#475569;text-decoration:none;transition:color 0.2s;"
                    onmouseenter="this.style.color='#0F4C81';"
                    onmouseleave="if(!this.classList.contains('nav-active'))this.style.color='#475569';">
                    Tentang
                </a>
                <a href="{{ route('home') }}#klien" class="nav-link" data-target="klien"
                    style="font-family:'Manrope',sans-serif;font-size:0.875rem;font-weight:600;letter-spacing:0.05em;color:#475569;text-decoration:none;transition:color 0.2s;"
                    onmouseenter="this.style.color='#0F4C81';"
                    onmouseleave="if(!this.classList.contains('nav-active'))this.style.color='#475569';">
                    Klien
                </a>
                <a href="{{ route('home') }}#galeri" class="nav-link" data-target="galeri"
                    style="font-family:'Manrope',sans-serif;font-size:0.875rem;font-weight:600;letter-spacing:0.05em;color:#475569;text-decoration:none;transition:color 0.2s;"
                    onmouseenter="this.style.color='#0F4C81';"
                    onmouseleave="if(!this.classList.contains('nav-active'))this.style.color='#475569';">
                    Galeri
                </a>
            </nav>

            {{-- CTA + Mobile toggle --}}
            <div class="flex items-center gap-4">
                {{-- CTA Button (sama doc1: bg biru gelap) --}}
                <a href="https://wa.link/2stl29"
                    style="font-family:'Manrope',sans-serif;background:#0F4C81;color:#fff;padding:10px 24px;border-radius:8px;font-size:0.875rem;font-weight:600;letter-spacing:0.05em;text-decoration:none;box-shadow:0 8px 20px rgba(15,76,129,0.2);transition:all 0.3s;transform:scale(0.97);"
                    onmouseenter="this.style.background='#00355f';this.style.transform='scale(1)';"
                    onmouseleave="this.style.background='#0F4C81';this.style.transform='scale(0.97)';">
                    Hubungi Kami
                </a>

                {{-- Mobile hamburger --}}
                <button type="button" id="mobile-btn"
                    class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-slate-500 hover:text-slate-700 hover:bg-slate-100 transition-colors focus:outline-none">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu Dropdown --}}
        <div id="mobile-menu"
            style="flex-direction:column;background:rgba(255,255,255,0.97);backdrop-filter:blur(10px);border-top:1px solid rgba(226,232,240,0.5);padding:16px 32px 24px;">
            <a href="{{ route('home') }}" class="mobile-nav-link" data-target="home"
                style="display:block;font-family:'Manrope',sans-serif;font-size:0.9rem;font-weight:600;color:#475569;padding:10px 12px;border-radius:8px;text-decoration:none;transition:all 0.2s;">
                Beranda
            </a>
            <a href="{{ route('services') }}" class="mobile-nav-link" data-target="services"
                style="display:block;font-family:'Manrope',sans-serif;font-size:0.9rem;font-weight:600;color:#475569;padding:10px 12px;border-radius:8px;text-decoration:none;transition:all 0.2s;">
                Layanan
            </a>
            <a href="{{ route('home') }}#keunggulan" class="mobile-nav-link" data-target="keunggulan"
                style="display:block;font-family:'Manrope',sans-serif;font-size:0.9rem;font-weight:600;color:#475569;padding:10px 12px;border-radius:8px;text-decoration:none;transition:all 0.2s;">
                Keunggulan
            </a>
            <a href="{{ route('home') }}#tentang" class="mobile-nav-link" data-target="tentang"
                style="display:block;font-family:'Manrope',sans-serif;font-size:0.9rem;font-weight:600;color:#475569;padding:10px 12px;border-radius:8px;text-decoration:none;transition:all 0.2s;">
                Tentang
            </a>
            <a href="{{ route('home') }}#klien" class="mobile-nav-link" data-target="klien"
                style="display:block;font-family:'Manrope',sans-serif;font-size:0.9rem;font-weight:600;color:#475569;padding:10px 12px;border-radius:8px;text-decoration:none;transition:all 0.2s;">
                Klien
            </a>
            <a href="{{ route('home') }}#galeri" class="mobile-nav-link" data-target="galeri"
                style="display:block;font-family:'Manrope',sans-serif;font-size:0.9rem;font-weight:600;color:#475569;padding:10px 12px;border-radius:8px;text-decoration:none;transition:all 0.2s;">
                Galeri
            </a>
            <a href="https://wa.link/2stl29"
                style="display:block;margin-top:8px;text-align:center;background:#0F4C81;color:#fff;padding:12px 24px;border-radius:8px;font-family:'Manrope',sans-serif;font-size:0.875rem;font-weight:600;letter-spacing:0.05em;text-decoration:none;">
                Hubungi Kami
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-slate-50 w-full border-t border-slate-200">
        <div class="max-w-[1280px] mx-auto px-8 py-16 flex flex-col md:flex-row justify-between gap-12">
            <div class="max-w-sm space-y-6">
                <div class="text-lg font-bold text-[#0F4C81] uppercase tracking-tighter">
                    Zona Instalasi Bandung
                </div>
                <p class="font-['Manrope'] text-sm leading-relaxed text-slate-500">
                    Solusi terpercaya untuk seluruh kebutuhan instalasi listrik dan maintenance gedung di Bandung dan
                    sekitarnya. Presisi dalam eksekusi, terpercaya dalam hasil.
                </p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-[#0F4C81] hover:border-[#0F4C81] transition-all"
                        href="#">
                        <span class="material-symbols-outlined text-[20px]">public</span>
                    </a>
                    <a class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-[#0F4C81] hover:border-[#0F4C81] transition-all"
                        href="#">
                        <span class="material-symbols-outlined text-[20px]">mail</span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-12 md:gap-24">
                <div class="space-y-6">
                    <h5 class="text-sm font-bold uppercase tracking-widest text-[#0F4C81]">Layanan</h5>
                    <ul class="space-y-4">
                        <li><a class="text-slate-500 hover:text-[#0F4C81] transition-all" href="#">Sistem Elektrikal</a>
                        </li>
                        <li><a class="text-slate-500 hover:text-[#0F4C81] transition-all" href="#">Instalasi Panel</a>
                        </li>
                        <li><a class="text-slate-500 hover:text-[#0F4C81] transition-all" href="#">Maintenance
                                Bangunan</a></li>
                    </ul>
                </div>
                <div class="space-y-6">
                    <h5 class="text-sm font-bold uppercase tracking-widest text-[#0F4C81]">Perusahaan</h5>
                    <ul class="space-y-4">
                        <li><a class="text-slate-500 hover:text-[#0F4C81] transition-all" href="#">Tentang Kami</a></li>
                        <li><a class="text-slate-500 hover:text-[#0F4C81] transition-all" href="#">Syarat &amp;
                                Ketentuan</a></li>
                        <li><a class="text-slate-500 hover:text-[#0F4C81] transition-all" href="#">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="max-w-[1280px] mx-auto px-8 py-8 border-t border-slate-200/50">
            <p class="font-['Manrope'] text-sm leading-relaxed text-slate-400 text-center md:text-left">
                © 2024 Zona Instalasi Bandung. Mitra Infrastruktur Terpercaya.
            </p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // ── Active state logic (dipertahankan dari doc5) ──────────────────
            const navLinks = document.querySelectorAll('.nav-link');
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

            function setActive(link) {
                navLinks.forEach(l => {
                    l.classList.remove('nav-active');
                    l.style.color = '#475569';
                    l.style.fontWeight = '600';
                });
                if (link) {
                    link.classList.add('nav-active');
                    link.style.color = '#0F4C81';
                    link.style.fontWeight = '800';
                }
            }

            function setActiveMobile(link) {
                mobileNavLinks.forEach(l => {
                    l.style.color = '#475569';
                    l.style.background = 'transparent';
                    l.style.fontWeight = '600';
                });
                if (link) {
                    link.style.color = '#0F4C81';
                    link.style.background = 'rgba(15,76,129,0.07)';
                    link.style.fontWeight = '800';
                }
            }

            // Initial active based on URL
            const currentPath = window.location.pathname;
            const currentHash = window.location.hash;

            if (currentPath.includes('/layanan')) {
                setActive(document.querySelector('a.nav-link[data-target="services"]'));
                setActiveMobile(document.querySelector('a.mobile-nav-link[data-target="services"]'));
            } else {
                if (currentHash) {
                    const t = currentHash.replace('#', '');
                    setActive(document.querySelector(`a.nav-link[data-target="${t}"]`));
                    setActiveMobile(document.querySelector(`a.mobile-nav-link[data-target="${t}"]`));
                } else {
                    setActive(document.querySelector('a.nav-link[data-target="home"]'));
                    setActiveMobile(document.querySelector('a.mobile-nav-link[data-target="home"]'));
                }
            }

            // Click handlers
            navLinks.forEach(link => link.addEventListener('click', () => setActive(link)));
            mobileNavLinks.forEach(link => link.addEventListener('click', () => {
                setActiveMobile(link);
                // Close mobile menu on click
                mobileMenu.classList.remove('open');
            }));

            // ── Mobile menu toggle ────────────────────────────────────────────
            const mobileBtn = document.getElementById('mobile-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('open');
                });
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>