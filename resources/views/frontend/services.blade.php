<x-frontend-layout>
    <!-- Header -->
    <div class="bg-primary pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Layanan Kami</h1>
            <p class="text-blue-100 text-lg">Solusi lengkap untuk kebutuhan instalasi dan maintenance Anda.</p>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                    <div
                        class="bg-white rounded-xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <div
                            class="w-12 h-12 bg-blue-100 text-[#1F75FE] rounded-lg flex items-center justify-center mb-6 transition-colors">
                            @php
                                $iconPath = public_path('icon/' . $service->icon);
                            @endphp

                            @if(file_exists($iconPath))
                                <div class="w-6 h-6 [&>svg]:w-full [&>svg]:h-full [&>svg]:fill-current [&>svg]:stroke-current">
                                    {!! str_replace(['fill="black"', 'stroke="black"'], ['fill="currentColor"', 'stroke="currentColor"'], file_get_contents($iconPath)) !!}
                                </div>
                            @else
                                <img src="{{ asset('icon/' . $service->icon) }}" class="w-6 h-6 object-contain" alt="">
                            @endif
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $service->title }}</h3>
                        <p class="text-gray-500 mb-6 leading-relaxed">
                            {{ $service->description }}
                        </p>
                    </div>
                @endforeach
            </div>

            @if($services->isEmpty())
                <div class="text-center py-12">
                    <p class="text-gray-500">Belum ada layanan yang tersedia saat ini.</p>
                </div>
            @endif
        </div>
    </div>
</x-frontend-layout>