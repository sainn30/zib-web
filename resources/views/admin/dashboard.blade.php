<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card Layanan -->
        <div class="bg-white border rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-center space-x-3 mb-4">
                <div class="p-2 bg-blue-100 rounded-full text-blue-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-gray-600 font-medium">Total Layanan</h3>
            </div>
            <div class="text-4xl font-bold text-gray-900 mb-2">{{ $serviceCount }}</div>
        </div>

        <!-- Card Galeri -->
        <div class="bg-white border rounded-xl p-6 shadow-sm hover:shadow-md transition">
            <div class="flex items-center space-x-3 mb-4">
                <div class="p-2 bg-blue-100 rounded-full text-blue-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-gray-600 font-medium">Total Galeri</h3>
            </div>
            <div class="text-4xl font-bold text-gray-900 mb-2">{{ $portfolioCount }}</div>
        </div>
    </div>
</x-app-layout>