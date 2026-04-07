<x-frontend-layout>
    <!-- Hero Section -->
    <div class="relative bg-dark min-h-screen flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover" src="{{ asset('images/hero-section.png') }}" alt="Hero Background">
            <div class="absolute inset-0 bg-black/20"></div>
        </div>

        <div class="relative z-10 w-full pt-20">
            <div class="max-w-7xl mx-[6rem] sm:px-6 lg:px-8">
                <div class="max-w-5xl">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-8">
                        Solusi Instalasi dan Maintenance <br>
                        Gedung yang Aman dan Profesional
                    </h1>

                    <p class="text-base md:text-lg text-gray-300 mb-10 leading-relaxed max-w-2xl opacity-90">
                        Zona Instalasi Bandung melayani instalasi listrik, AC, dan sistem gedung dengan tenaga ahli
                        berpengalaman, pengerjaan rapi, serta komitmen penuh terhadap keamanan dan kualitas.
                    </p>

                    <a href="#contact"
                        class="inline-flex items-center px-7 py-3.5 bg-primary text-white font-semibold rounded-lg hover:bg-blue-600 transition-all shadow-lg hover:shadow-xl group">
                        Konsultasi dengan Tim Kami
                        <svg class="ml-2.5 w-5 h-5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 17L17 7M17 7H7M17 7V17"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services" class="py-24 bg-cover bg-center bg-no-repeat relative"
        style="background-image: url('{{ asset('public\images\service-bg.png') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-[48px] font-bold text-black">Layanan Kami</h2>
                <p class="text-[19px] text-black/90">Solusi lengkap untuk kebutuhan instalasi dan maintenance Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($services as $service)
                    <div
                        class="bg-white rounded-xl p-8 border border-gray-200 shadow-md hover:shadow-md transition-shadow group">
                        <div
                            class="w-12 h-12 bg-blue-100 text-[#1F75FE] rounded-lg flex items-center justify-center mb-6  ">
                            @php
                                $iconPath = public_path('icon/' . $service->icon);
                            @endphp

                            @if(file_exists($iconPath))
                                <div class="w-6 h-6 [&>svg]:w-full [&>svg]:h-full  [&>svg]:stroke-current">
                                    {!! str_replace(['fill="black"', 'stroke="black"'], ['fill="currentColor"', 'stroke="currentColor"'], file_get_contents($iconPath)) !!}
                                </div>
                            @else
                                <img src="{{ asset('icon/' . $service->icon) }}" class="w-6 h-6 object-contain" alt="">
                            @endif
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $service->title }}</h3>
                        <p class="text-gray-500 mb-6 leading-relaxed line-clamp-3">
                            {{ $service->description }}
                        </p>
                        <a href="{{ route('services') }}"
                            class="inline-flex items-center text-primary font-semibold text-blue-700 underline-offset-4 hover:underline">
                            Pelajari lebih lanjut
                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                    d="M7 17L17 7M17 7H7M17 7V17">
                                </path>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('services') }}"
                    class="inline-flex items-center px-8 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors shadow-lg hover:shadow-xl">
                    Lihat Semua Layanan
                </a>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div id="keunggulan" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <h2 class="text-[48px] font-bold text-gray-900">Kenapa Memilih</h2>
                    <h2 class="text-[48px] font-bold text-primary mb-12">Zona Instalasi?</h2>

                    <div class="space-y-10">
                        <div class="border-b border-gray-500 pb-8">
                            <h3 class="text-[27px] font-bold text-gray-900 mb-2">Beroperasi secara Otomatis</h3>
                            <p class="text-gray-600 text-[16px]">Menggunakan teknologi terkini untuk memastikan keamanan
                                dan
                                efisiensi operasional bangunan Anda.</p>
                        </div>
                        <div class="border-b border-gray-500 pb-8">
                            <h3 class="text-[27px] font-bold text-gray-900 mb-2">Sangat Efisien dan Berkelanjutan</h3>
                            <p class="text-gray-600 text-[16px]">Solusi hemat energi yang tidak hanya mengurangi biaya
                                operasional
                                tapi juga ramah lingkungan.</p>
                        </div>
                        <div>
                            <h3 class="text-[27px] font-bold text-gray-900 mb-2">Terintegrasi Sepenuhnya</h3>
                            <p class="text-gray-600 text-[16px]">Semua sistem listrik dan pemipaan terintegrasi untuk
                                kemudahan
                                pemantauan dan maintenance.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img class="rounded-2xl shadow-xl w-full object-cover h-[600px]"
                        src="{{ asset('images/layanan.png') }}" alt="Why Choose Us">
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div id="about" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row-reverse items-center gap-16">
                <div class="lg:w-1/2">
                    <h2 class="text-[48px] font-bold text-gray-900 mb-6">Tentang Kami</h2>
                    <p class="text-[25px] text-gray-500 leading-relaxed mb-6">
                        <span class="text-[27px] font-bold text-gray-900">Zona Instalasi Bandung</span> adalah
                        perwujudan nyata
                        usaha yang telah melewati proses panjang di dalam dunia instalasi elektrikal dan plumbing
                        sebagai core unit usaha yang senantiasa dijalankan selama lebih dari 20 tahun pengalaman,
                        menjaga integritas komitmen dalam pemberian pelayanan terbaik dengan progress meluaskan hal yang
                        mutlak kami lakukan untuk menjadi pelopor di setiap project.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <img class="rounded-2xl shadow-xl w-full object-cover h-[410px]"
                        src="{{ asset('images/about.png') }}" alt="About Us">
                </div>
            </div>
        </div>
    </div>

    <!-- Clients Section -->
    <div id="clients" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-[48px] font-bold text-gray-900">Klien & Mitra Kami</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-8 items-center ">
                <!-- Logos -->
                <div class="flex justify-center p-4">
                    <img class="h-17 object-contain" src="{{ asset('images/logo/kai.png') }}" alt="KAI">
                </div>
                <div class="flex justify-center p-4">
                    <img class="h-17 object-contain" src="{{ asset('images/logo/xl.png') }}" alt="XL Axiata">
                </div>
                <div class="flex justify-center p-4">
                    <img class="h-17 object-contain" src="{{ asset('images/logo/telkomsel.png') }}" alt="Telkomsel">
                </div>
                <div class="flex justify-center p-4">
                    <img class="h-17 object-contain" src="{{ asset('images/logo/epcon.png') }}" alt="EPCON">
                </div>
                <div class="flex justify-center p-4">
                    <img class="h-17 object-contain" src="{{ asset('images/logo/dapra.png') }}" alt="Dapra">
                </div>
                <div class="flex justify-center p-4">
                    <img class="h-17 object-contain" src="{{ asset('images/logo/sarana.png') }}" alt="Sarana">
                </div>
                <div class="flex justify-center p-4">
                    <img class="h-17 object-contain" src="{{ asset('images/logo/inovindo.png') }}" alt="Inovindo">
                </div>
                <div class="flex justify-center p-4">
                    <img class="h-17 object-contain" src="{{ asset('images/logo/draco.png') }}" alt="Darco">
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div id="gallery" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-[100px]">
                <h2 class="text-[48px] font-bold text-gray-900">Galeri Kami</h2>
            </div>

            <!-- Swiper Container Wrapper -->
            <div class="relative px-12">
                <div class="swiper mySwiper w-full">
                    <div class="swiper-wrapper pb-12">
                        @foreach($portfolios as $portfolio)
                            <div class="swiper-slide">
                                <div class="relative overflow-hidden rounded-xl h-64 shadow-lg cursor-pointer">
                                    @if($portfolio->image_path)
                                        <img class="w-full h-full object-cover" src="{{ Storage::url($portfolio->image_path) }}"
                                            alt="{{ $portfolio->title }}">
                                    @else
                                        <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">No
                                            Image</div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Custom Navigation Buttons -->
                <button
                    class="swiper-button-prev-custom absolute left-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 flex items-center justify-center text-gray-800 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button
                    class="swiper-button-next-custom absolute right-0 top-1/2 -translate-y-1/2 z-10 w-10 h-10 flex items-center justify-center text-gray-800 hover:text-primary transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>

            <!-- Swiper Initialization -->
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var swiper = new Swiper(".mySwiper", {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        loop: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                            dynamicBullets: true,
                        },
                        navigation: {
                            nextEl: ".swiper-button-next-custom",
                            prevEl: ".swiper-button-prev-custom",
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 20,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                        },
                    });
                });
            </script>
        </div>
    </div>

    <!-- Contact Section
    <div id="contact" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900">Hubungi Kami</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                Alamat 
                <div
                    class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg text-center hover:-translate-y-1 transition-transform">
                    <div
                        class="w-16 h-16 bg-blue-50 text-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Alamat</h3>
                    <p class="text-gray-500">
                        Jl. Taman Kopo Indah I No. 60<br>
                        Bandung, Jawa Barat
                    </p>
                </div>

                Email 
                <div
                    class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg text-center hover:-translate-y-1 transition-transform">
                    <div
                        class="w-16 h-16 bg-blue-50 text-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Email</h3>
                    <p class="text-gray-500">
                        zonainstalasi@gmail.com
                    </p>
                </div>

                Kontak 
                <div
                    class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg text-center hover:-translate-y-1 transition-transform">
                    <div
                        class="w-16 h-16 bg-blue-50 text-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Kontak</h3>
                    <p class="text-gray-500">
                        +62 821-2054-1517
                    </p>
                </div>
            </div>
        </div>
    </div> -->
</x-frontend-layout>