<x-frontend-layout>

{{-- ===================== ASSETS & STYLES ===================== --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
    /* ---- Reset dasar ---- */
    *, *::before, *::after { box-sizing: border-box; }

    /* ---- Font ---- */
    body { font-family: 'Manrope', sans-serif; }

    /* ---- Material Icons ---- */
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    /* ---- Glassmorphism card (sama doc1) ---- */
    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    /* ---- Custom typography tokens (sama doc1) ---- */
    .t-h1  { font-size:48px; line-height:1.1; letter-spacing:-0.02em; font-weight:800; }
    .t-h2  { font-size:36px; line-height:1.2; letter-spacing:-0.01em; font-weight:700; }
    .t-h3  { font-size:24px; line-height:1.3; font-weight:700; }
    .t-body-lg   { font-size:18px; line-height:1.6; }
    .t-label-caps { font-size:12px; line-height:1; letter-spacing:0.1em; font-weight:700; text-transform:uppercase; }

    /* ---- Color tokens (sama doc1) ---- */
    .c-on-surface         { color: #0b1c30; }
    .c-on-surface-variant { color: #42474f; }
    .c-secondary          { color: #0058bd; }
    .c-secondary-fixed    { color: #d8e2ff; }
    .c-primary-container  { color: #0f4c81; }

    .bg-surf-low   { background-color: #eff4ff; }
    .bg-on-surface { background-color: #0b1c30; }
    .bg-sec-cont   { background-color: #1470e8; }

    /* ---- Section padding (sama doc1: 120px) ---- */
    .sec-pad { padding-top: 120px; padding-bottom: 120px; }

    /* ---- Container ---- */
    .cont { max-width: 1280px; margin: 0 auto; padding: 0 32px; }

    /* ---- Marquee ---- */
    .marquee-wrap { overflow: hidden; cursor: pointer; }
    .marquee-track {
        display: flex;
        width: max-content;
        align-items: center;
        gap: 80px;
        padding: 16px 0;
        animation: marquee 30s linear infinite;
    }
    .marquee-track:hover { animation-play-state: paused; }
    @keyframes marquee {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }

    /* ---- Service card hover ---- */
    .svc-card {
        background: #fff;
        padding: 32px;
        border-radius: 16px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08);
        transition: box-shadow 0.3s, transform 0.3s;
    }
    .svc-card:hover {
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        transform: translateY(-8px);
    }
    .svc-card:hover .svc-icon  { background: #0F4C81; }
    .svc-card:hover .svc-title { color: #0F4C81; }

    /* ---- Gallery hover ---- */
    .gal-img { transition: transform 0.7s; }
    .gal-item:hover .gal-img  { transform: scale(1.1); }
    .gal-item:hover .gal-overlay { opacity: 1; }
    .gal-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
        opacity: 0; transition: opacity 0.3s;
        display: flex; flex-direction: column;
        justify-content: flex-end; padding: 32px;
    }

    /* ---- CTA button hover ---- */
    .cta-btn:hover { background: #f1f5f9 !important; transform: scale(1.05); }

    /* ---- Responsive grid ---- */
    @media (max-width: 768px) {
        .hero-grid, .why-grid, .about-grid { grid-template-columns: 1fr !important; }
        .svc-grid { grid-template-columns: 1fr !important; }
        .t-h1 { font-size: 32px; }
        .t-h2 { font-size: 28px; }
        .sec-pad { padding-top: 64px; padding-bottom: 64px; }
    }
</style>

{{-- ================================================================ --}}
{{-- HERO                                                              --}}
{{-- ================================================================ --}}
<section style="position:relative;overflow:hidden;padding-top:96px;padding-bottom:128px;">
    {{-- BG blobs (sama doc1) --}}
    <div style="position:absolute;inset:0;z-index:0;">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(15,76,129,0.1) 0%,transparent 100%);"></div>
        <div style="position:absolute;top:-10%;right:-10%;width:600px;height:600px;background:rgba(20,112,232,0.05);border-radius:9999px;filter:blur(120px);"></div>
    </div>

    <div class="cont" style="position:relative;z-index:10;">
        <div class="hero-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;">

            {{-- LEFT TEXT --}}
            <div style="display:flex;flex-direction:column;gap:32px;">
                {{-- Badge --}}
                <div style="display:inline-flex;align-items:center;gap:8px;padding:4px 12px;background:rgba(15,76,129,0.1);color:#0f4c81;border-radius:9999px;width:fit-content;">
                    <span class="material-symbols-outlined" style="font-size:18px;">verified</span>
                    <span class="t-label-caps">Mitra Infrastruktur Terpercaya</span>
                </div>

                <h1 class="t-h1 c-on-surface">
                    Solusi Instalasi dan Maintenance Gedung yang
                    <span style="color:#0F4C81;">Aman dan Profesional</span>
                </h1>

                <p class="t-body-lg c-on-surface-variant" style="max-width:36rem;">
                    Didukung oleh tim ahli bersertifikasi dan komitmen tinggi terhadap kualitas, kami menghadirkan
                    layanan instalasi yang presisi untuk keamanan jangka panjang bangunan Anda.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:16px;padding-top:16px;">
                    <a href="https://wa.link/o3y8y8"
                        style="background:#1470e8;color:#fff;padding:16px 32px;border-radius:8px;font-weight:600;display:inline-flex;align-items:center;gap:8px;text-decoration:none;box-shadow:0 20px 40px rgba(20,112,232,0.2);transition:transform 0.2s;"
                        onmouseenter="this.style.transform='translateY(-2px)';"
                        onmouseleave="this.style.transform='translateY(0)';">
                        Konsultasi dengan Tim Kami
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="#portfolio"
                        style="background:#fff;color:#00355f;border:1px solid #c2c7d1;padding:16px 32px;border-radius:8px;font-weight:600;text-decoration:none;transition:background 0.2s;"
                        onmouseenter="this.style.background='#e5eeff';"
                        onmouseleave="this.style.background='#fff';">
                        Lihat Galeri
                    </a>
                </div>
            </div>

            {{-- RIGHT IMAGE --}}
            <div style="position:relative;">
                <div style="border-radius:16px;overflow:hidden;box-shadow:0 25px 50px rgba(15,76,129,0.1);border:8px solid #fff;">
                    <img alt="Instalasi Listrik Profesional"
                        style="width:100%;height:500px;object-fit:cover;"
                        src="{{ asset('images/hero-section.png') }}"/>
                </div>
                {{-- Floating glass card (sama doc1) --}}
                <div class="glass-card" style="position:absolute;bottom:-32px;left:-32px;padding:24px;border-radius:12px;box-shadow:0 20px 40px rgba(0,0,0,0.1);max-width:200px;">
                    <p style="color:#0F4C81;font-weight:700;font-size:30px;">20+</p>
                    <p class="c-on-surface-variant" style="font-size:14px;font-weight:600;">Tahun Pengalaman Industri</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ================================================================ --}}
{{-- CORE SERVICES                                                     --}}
{{-- ================================================================ --}}
<section class="sec-pad bg-surf-low" id="layanan">
    <div class="cont">

        {{-- Header (sama doc1) --}}
        <div style="text-align:center;margin-bottom:64px;">
            <span class="t-label-caps c-secondary">Expertise</span>
            <h2 class="t-h2 c-on-surface" style="margin-top:8px;">Layanan Utama Kami</h2>
            <div style="width:80px;height:4px;background:#0058bd;margin:16px auto 0;border-radius:9999px;"></div>
        </div>

        {{-- Cards — data dari Laravel --}}
        <div class="svc-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:32px;">
            @foreach($services as $service)
            <div class="svc-card">
                {{-- Icon wrapper --}}
                <div class="svc-icon"
                    style="width:64px;height:64px;background:rgba(15,76,129,0.05);border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:24px;transition:background 0.3s;">
                    @php
                        $iconPath = public_path('icon/' . $service->icon);
                        $svgContent = '';
                        if (file_exists($iconPath)) {
                            $svgContent = file_get_contents($iconPath);
                            $svgContent = str_replace(['#000', '#000000', 'black'], 'currentColor', $svgContent);
                        }
                    @endphp
                    @if($svgContent)
                        <div style="width:32px;height:32px;color:#0F4C81;">{!! $svgContent !!}</div>
                    @else
                        <img src="{{ asset('icon/' . $service->icon) }}" style="width:32px;height:32px;object-fit:contain;" alt="">
                    @endif
                </div>

                <h3 class="t-h3 svc-title" style="margin-bottom:16px;transition:color 0.3s;">{{ $service->title }}</h3>
                <p class="c-on-surface-variant" style="margin-bottom:24px;line-height:1.7;">{{ $service->description }}</p>

                <a href="{{ route('services') }}"
                    style="display:inline-flex;align-items:center;gap:8px;font-weight:600;color:#0F4C81;text-decoration:none;transition:gap 0.2s;"
                    onmouseenter="this.style.gap='16px';"
                    onmouseleave="this.style.gap='8px';">
                    Pelajari lebih lanjut
                    <span class="material-symbols-outlined" style="font-size:16px;">chevron_right</span>
                </a>
            </div>
            @endforeach
        </div>

        {{-- Tombol lihat semua (dari doc2) --}}
        <div style="text-align:center;margin-top:48px;">
            <a href="{{ route('services') }}"
                style="display:inline-flex;align-items:center;padding:12px 32px;background:#1470e8;color:#fff;font-weight:600;border-radius:8px;text-decoration:none;box-shadow:0 8px 20px rgba(20,112,232,0.2);transition:background 0.2s;"
                onmouseenter="this.style.background='#0d5fd4';"
                onmouseleave="this.style.background='#1470e8';">
                Lihat Semua Layanan
            </a>
        </div>

    </div>
</section>

{{-- ================================================================ --}}
{{-- WHY CHOOSE US                                                     --}}
{{-- ================================================================ --}}
<section class="sec-pad">
    <div class="cont">
        <div class="why-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;">

            {{-- IMAGE — kiri (order-2 di doc1) --}}
            <div style="position:relative;">
                <div style="border-radius:16px;overflow:hidden;aspect-ratio:4/5;">
                    <img alt="Why Choose Us"
                        style="width:100%;height:100%;object-fit:cover;"
                        src="{{ asset('images/layanan.png') }}"/>
                </div>
                {{-- ISO badge floating (sama doc1) --}}
                <div style="position:absolute;top:-24px;right:-24px;background:#fff;padding:16px;border-radius:12px;box-shadow:0 10px 30px rgba(0,0,0,0.1);border:1px solid #f1f5f9;">
                    <div style="display:flex;align-items:center;gap:12px;">
                        <div style="background:#dcfce7;padding:8px;border-radius:9999px;">
                            <span class="material-symbols-outlined" style="color:#16a34a;">verified</span>
                        </div>
                        <span style="font-weight:700;color:#0b1c30;">ISO Certified Standard</span>
                    </div>
                </div>
            </div>

            {{-- TEXT — kanan (order-1 di doc1) --}}
            <div style="display:flex;flex-direction:column;gap:40px;">
                <div>
                    <span class="t-label-caps c-secondary">Keunggulan</span>
                    <h2 class="t-h2" style="margin-top:16px;">Kenapa Memilih Zona Instalasi?</h2>
                </div>

                <div style="display:flex;flex-direction:column;gap:32px;">
                    {{-- Item --}}
                    @php
                        $whys = [
                            ['icon'=>'automation','title'=>'Beroperasi secara Otomatis',      'desc'=>'Sistem kami dirancang untuk kemudahan operasional dengan teknologi otomasi terbaru yang meminimalisir kesalahan manusia.'],
                            ['icon'=>'eco',        'title'=>'Sangat Efisien dan Berkelanjutan','desc'=>'Kami memprioritaskan efisiensi energi dalam setiap instalasi untuk mendukung keberlanjutan lingkungan dan penghematan biaya.'],
                            ['icon'=>'integration_instructions','title'=>'Terintegrasi Sepenuhnya','desc'=>'Solusi yang saling terhubung antara sistem listrik, keamanan, dan kontrol bangunan untuk pengelolaan yang lebih cerdas.'],
                        ];
                    @endphp
                    @foreach($whys as $w)
                    <div style="display:flex;gap:24px;">
                        <div style="flex-shrink:0;width:48px;height:48px;background:rgba(20,112,232,0.1);border-radius:9999px;display:flex;align-items:center;justify-content:center;">
                            <span class="material-symbols-outlined c-secondary">{{ $w['icon'] }}</span>
                        </div>
                        <div>
                            <h4 class="t-h3" style="font-size:20px;margin-bottom:8px;">{{ $w['title'] }}</h4>
                            <p class="c-on-surface-variant">{{ $w['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ================================================================ --}}
{{-- ABOUT US                                                          --}}
{{-- ================================================================ --}}
<section class="sec-pad bg-on-surface" id="tentang" style="color:#fff;position:relative;overflow:hidden;">
    {{-- Decorative circle (sama doc1) --}}
    <div style="position:absolute;top:0;right:0;width:33%;height:100%;opacity:0.1;pointer-events:none;">
        <svg style="height:100%;width:100%;" viewBox="0 0 100 100">
            <circle cx="100" cy="50" fill="currentColor" r="50"></circle>
        </svg>
    </div>

    <div class="cont" style="position:relative;z-index:10;">
        <div class="about-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;">

            {{-- TEXT --}}
            <div style="display:flex;flex-direction:column;gap:32px;">
                <span class="t-label-caps c-secondary-fixed">About Us</span>
                <h2 class="t-h2">Tentang Kami</h2>
                <p class="t-body-lg" style="color:#cbd5e1;">
                    Zona Instalasi Bandung adalah perwujudan nyata usaha yang telah melewati proses panjang di dalam
                    dunia instalasi elektrikal dan plumbing sebagai core unit usaha yang senantiasa dijalankan selama
                    lebih dari 20 tahun pengalaman, menjaga integritas komitmen dalam pemberian pelayanan terbaik
                    dengan progress meluaskan hal yang mutlak kami lakukan untuk menjadi pelopor di setiap project.
                </p>
                <p style="color:#94a3b8;">
                    Fokus kami bukan hanya pada pemasangan, tetapi pada membangun hubungan kemitraan jangka panjang
                    melalui layanan maintenance yang proaktif dan responsif. Kami percaya bahwa keamanan gedung dimulai
                    dari instalasi yang tepat.
                </p>
                {{-- Stats (sama doc1) --}}
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:32px;padding-top:32px;">
                    <div style="border-left:2px solid #0058bd;padding-left:24px;">
                        <p class="c-secondary-fixed" style="font-size:30px;font-weight:700;">500+</p>
                        <p style="color:#94a3b8;font-size:14px;">Proyek Selesai</p>
                    </div>
                    <div style="border-left:2px solid #0058bd;padding-left:24px;">
                        <p class="c-secondary-fixed" style="font-size:30px;font-weight:700;">100%</p>
                        <p style="color:#94a3b8;font-size:14px;">Kepuasan Klien</p>
                    </div>
                </div>
            </div>

            {{-- IMAGE --}}
            <div style="border-radius:16px;overflow:hidden;box-shadow:0 25px 50px rgba(0,0,0,0.3);">
                <img alt="Our Office"
                    style="width:100%;height:400px;object-fit:cover;"
                    src="{{ asset('images/about.png') }}"/>
            </div>

        </div>
    </div>
</section>

{{-- ================================================================ --}}
{{-- PARTNERS / CLIENTS — marquee                                      --}}
{{-- ================================================================ --}}
<section style="padding:80px 0;border-bottom:1px solid #e2e8f0;overflow:hidden;">
    <div class="cont">
        <p class="t-label-caps c-on-surface-variant" style="text-align:center;margin-bottom:48px;">Klien &amp; Mitra Kami</p>

        @php
            $logos = [
                ['src'=>'kai.png',       'alt'=>'KAI'],
                ['src'=>'xl.png',        'alt'=>'XL Axiata'],
                ['src'=>'telkomsel.png', 'alt'=>'Telkomsel'],
                ['src'=>'epcon.png',     'alt'=>'EPCON'],
                ['src'=>'dapra.png',     'alt'=>'Dapra'],
                ['src'=>'sarana.png',    'alt'=>'Sarana'],
                ['src'=>'inovindo.png',  'alt'=>'Inovindo'],
                ['src'=>'draco.png',     'alt'=>'Darco'],
            ];
        @endphp

        <div class="marquee-wrap">
            <div class="marquee-track">
                {{-- Set 1 --}}
                @foreach($logos as $logo)
                    <img style="height:80px;width:auto;object-fit:contain;filter:grayscale(100%);opacity:0.5;transition:all 0.3s;flex-shrink:0;"
                        onmouseenter="this.style.filter='grayscale(0%)';this.style.opacity='1';"
                        onmouseleave="this.style.filter='grayscale(100%)';this.style.opacity='0.5';"
                        src="{{ asset('images/logo/' . $logo['src']) }}" alt="{{ $logo['alt'] }}">
                @endforeach
                {{-- Set 2 duplikat agar seamless --}}
                @foreach($logos as $logo)
                    <img style="height:80px;width:auto;object-fit:contain;filter:grayscale(100%);opacity:0.5;transition:all 0.3s;flex-shrink:0;"
                        onmouseenter="this.style.filter='grayscale(0%)';this.style.opacity='1';"
                        onmouseleave="this.style.filter='grayscale(100%)';this.style.opacity='0.5';"
                        src="{{ asset('images/logo/' . $logo['src']) }}" alt="{{ $logo['alt'] }}">
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ================================================================ --}}
{{-- GALLERY / PORTFOLIO — Swiper + style doc1                        --}}
{{-- ================================================================ --}}
<section class="sec-pad" id="portfolio">
    <div class="cont">

        {{-- Header (sama doc1) --}}
        <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:64px;flex-wrap:wrap;gap:24px;">
            <div style="display:flex;flex-direction:column;gap:16px;">
                <span class="t-label-caps c-secondary">Showcase</span>
                <h2 class="t-h2 c-on-surface">Galeri Kami</h2>
            </div>
            <a href="#" style="color:#0F4C81;font-weight:700;display:inline-flex;align-items:center;gap:8px;text-decoration:none;"
                onmouseenter="this.querySelector('span').style.transform='translateX(8px)';"
                onmouseleave="this.querySelector('span').style.transform='translateX(0)';">
                Lihat Semua Proyek
                <span class="material-symbols-outlined" style="transition:transform 0.2s;">arrow_forward</span>
            </a>
        </div>

<<<<<<< HEAD
        {{-- Swiper (doc2 logic + doc1 visual) --}}
        <div style="position:relative;padding:0 48px;">
            <div class="swiper mySwiper" style="width:100%;">
                <div class="swiper-wrapper" style="padding-bottom:48px;">
                    @foreach($portfolios as $portfolio)
                    <div class="swiper-slide">
                        <div class="gal-item" style="position:relative;overflow:hidden;border-radius:16px;height:320px;cursor:pointer;">
                            @if($portfolio->image_path)
                                <img class="gal-img"
                                    style="width:100%;height:100%;object-fit:cover;"
                                    src="{{ Storage::url($portfolio->image_path) }}"
                                    alt="{{ $portfolio->title }}">
                                <div class="gal-overlay">
                                    <h4 style="color:#fff;font-size:18px;font-weight:700;">{{ $portfolio->title }}</h4>
=======
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($services as $service)
                    <div
                        class="bg-white rounded-xl p-8 border border-gray-200 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">

                        {{-- Wrapper Ikon dengan efek hover --}}
                        <div
                            class="w-12 h-12 bg-blue-100 text-[#1F75FE] rounded-lg flex items-center justify-center mb-6 transition-colors duration-300 group-hover:bg-[#1F75FE] group-hover:text-white">
                            @php
                                $iconPath = public_path('icon/' . $service->icon);
                                $svgContent = '';
                                if (file_exists($iconPath)) {
                                    $svgContent = file_get_contents($iconPath);
                                    $svgContent = str_replace(['#000', '#000000', 'black'], 'currentColor', $svgContent);
                                }
                            @endphp

                            @if($svgContent)
                                <div class="w-6 h-6 [&>svg]:w-full [&>svg]:h-full">
                                    {!! $svgContent !!}
>>>>>>> efc0a24d66650470105d90bc9ae544a520a272b1
                                </div>
                            @else
                                <div style="width:100%;height:100%;background:#e2e8f0;display:flex;align-items:center;justify-content:center;color:#94a3b8;">No Image</div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <button class="swiper-button-prev-custom"
                style="position:absolute;left:0;top:50%;transform:translateY(-50%);z-index:10;width:40px;height:40px;display:flex;align-items:center;justify-content:center;background:transparent;border:none;cursor:pointer;color:#0b1c30;transition:color 0.2s;"
                onmouseenter="this.style.color='#0F4C81';" onmouseleave="this.style.color='#0b1c30';">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width:32px;height:32px;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                </svg>
            </button>
            <button class="swiper-button-next-custom"
                style="position:absolute;right:0;top:50%;transform:translateY(-50%);z-index:10;width:40px;height:40px;display:flex;align-items:center;justify-content:center;background:transparent;border:none;cursor:pointer;color:#0b1c30;transition:color 0.2s;"
                onmouseenter="this.style.color='#0F4C81';" onmouseleave="this.style.color='#0b1c30';">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width:32px;height:32px;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                </svg>
            </button>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new Swiper(".mySwiper", {
                    slidesPerView: 1,
                    spaceBetween: 24,
                    loop: true,
                    autoplay: { delay: 2500, disableOnInteraction: false },
                    pagination: { el: ".swiper-pagination", clickable: true, dynamicBullets: true },
                    navigation: {
                        nextEl: ".swiper-button-next-custom",
                        prevEl: ".swiper-button-prev-custom",
                    },
                    breakpoints: {
                        640:  { slidesPerView: 2, spaceBetween: 20 },
                        1024: { slidesPerView: 3, spaceBetween: 24 },
                    },
                });
            });
        </script>

    </div>
</section>

{{-- ================================================================ --}}
{{-- CTA SECTION (sama persis doc1)                                   --}}
{{-- ================================================================ --}}
<section class="sec-pad">
    <div class="cont">
        <div style="background:#0F4C81;border-radius:24px;padding:80px;position:relative;overflow:hidden;text-align:center;color:#fff;">
            <div style="position:absolute;inset:0;background:radial-gradient(circle at 50% 50%,rgba(20,112,232,0.3),transparent);"></div>
            <div style="position:relative;z-index:10;max-width:672px;margin:0 auto;display:flex;flex-direction:column;gap:32px;align-items:center;">
                <h2 style="font-size:48px;font-weight:800;line-height:1.1;letter-spacing:-0.02em;">
                    Siap Membangun Infrastruktur yang Lebih Aman?
                </h2>
                <p style="font-size:18px;color:rgba(255,255,255,0.8);">
                    Konsultasikan kebutuhan instalasi dan maintenance gedung Anda dengan para ahli kami hari ini.
                </p>
                <a href="https://wa.link/o3y8y8" class="cta-btn"
                    style="background:#fff;color:#0F4C81;padding:20px 40px;border-radius:12px;font-weight:800;font-size:18px;text-decoration:none;box-shadow:0 25px 50px rgba(0,0,0,0.25);transition:all 0.2s;display:inline-block;">
                    Hubungi Kami Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

</x-frontend-layout>