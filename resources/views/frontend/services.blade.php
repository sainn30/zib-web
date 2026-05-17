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
    <div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
                {{-- Card dengan transisi shadow --}}
                <div class="bg-white rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 group">
                    
                    {{-- Wrapper Ikon: berubah biru solid saat card di-hover --}}
                    <div class="w-12 h-12 bg-blue-100 text-[#1F75FE] rounded-lg flex items-center justify-center mb-6 transition-colors duration-300 group-hover:bg-[#1F75FE] group-hover:text-white">
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