<x-frontend-layout>

    <!-- Header -->
    <div class="relative w-full bg-cover bg-center h-[300px] md:h-[412px] flex items-center justify-center"
        style="background-image: url('{{ asset('images/layanan-bg.png') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Layanan Kami</h1>
            <p class="text-gray-100 text-base md:text-lg">Solusi lengkap untuk kebutuhan instalasi dan maintenance Anda.</p>
        </div>
    </div>

    <!-- Services Grid -->
    <section class="bg-surf-low" style="padding-top:120px;padding-bottom:120px;">

        <style>
            .bg-surf-low { background-color: #eff4ff; }

            /* Card sama persis dengan home page */
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
            .svc-icon { transition: background 0.3s; }
            .svc-title { transition: color 0.3s; }
        </style>

        <div style="max-width:1280px;margin:0 auto;padding:0 32px;">


            {{-- Grid cards --}}
            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:32px;">
                @foreach($services as $service)
                <div class="svc-card">

                    {{-- Icon wrapper --}}
                    <div class="svc-icon"
                        style="width:64px;height:64px;background:rgba(15,76,129,0.05);border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:24px;">
                        @php
                            $iconPath = public_path('icon/' . $service->icon);
                            $svgContent = '';
                            if (file_exists($iconPath)) {
                                $svgContent = file_get_contents($iconPath);
                                $svgContent = str_replace(['#000', '#000000', 'black'], 'currentColor', $svgContent);
                            }
                        @endphp
                        @if($svgContent)
                            <div style="width:32px;height:32px;color:#0F4C81;">
                                {!! $svgContent !!}
                            </div>
                        @else
                            <img src="{{ asset('icon/' . $service->icon) }}" style="width:32px;height:32px;object-fit:contain;" alt="">
                        @endif
                    </div>

                    <h3 class="svc-title" style="font-size:24px;line-height:1.3;font-weight:700;color:#0b1c30;margin-bottom:16px;">
                        {{ $service->title }}
                    </h3>
                    <p style="color:#42474f;line-height:1.7;font-size:16px;">
                        {{ $service->description }}
                    </p>
                </div>
                @endforeach
            </div>

            @if($services->isEmpty())
                <div style="text-align:center;padding:48px 0;">
                    <p style="color:#94a3b8;">Belum ada layanan yang tersedia saat ini.</p>
                </div>
            @endif

        </div>
    </section>

</x-frontend-layout>