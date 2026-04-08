<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-900 leading-tight">
            Layanan <span class="text-gray-400 font-medium">/</span> Tambah
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
            <div class="p-10 text-gray-900">
                <form action="{{ route('admin.services.store') }}" method="POST">
                    @csrf
                    <!-- Judul Layanan -->
                    <div class="mb-8">
                        <label class="block text-gray-900 text-base font-bold mb-3 italic-not-really">Judul
                            Layanan</label>
                        <input type="text" name="title" placeholder="Layanan"
                            class="w-full md:w-1/2 px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all placeholder-gray-300"
                            required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-8">
                        <label class="block text-gray-900 text-base font-bold mb-3">Deskripsi</label>
                        <textarea name="description" placeholder="Deskripsi Layanan"
                            class="w-full md:w-3/4 px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition-all h-32 placeholder-gray-300"
                            required></textarea>
                    </div>

                    <!-- Ikon Section -->
                    <div class="mb-12">
                        <label class="block text-gray-900 text-base font-bold mb-6">Ikon</label>
                        <div class="grid grid-cols-5 sm:grid-cols-8 md:grid-cols-10 lg:grid-cols-12 gap-3"
                            id="icon-grid">
                            @foreach ($icons as $icon)
                                @php $isHidden = $loop->index >= 24; @endphp
                                <label
                                    class="cursor-pointer group relative flex items-center justify-center aspect-square border border-gray-100 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all {{ $isHidden ? 'hidden icon-item-hidden' : '' }}">
                                    <input type="radio" name="icon" value="{{ $icon }}"
                                        class="absolute opacity-0 w-full h-full cursor-pointer peer" required>
                                    <div class="p-7 flex items-center justify-center w-full h-full">
                                        <img src="{{ asset('icon/' . $icon) }}" alt="{{ $icon }}"
                                            class="w-full h-full object-contain filter grayscale group-hover:grayscale-0 peer-checked:grayscale-0 transition-all">
                                    </div>
                                    <div
                                        class="absolute inset-0 border-2 border-transparent rounded-lg pointer-events-none peer-checked:border-blue-600">
                                    </div>
                                </label>
                            @endforeach
                        </div>

                        @if(count($icons) > 24)
                            <div class="text-center mt-8">
                                <button type="button" id="toggle-icons-btn"
                                    class="text-gray-500 hover:text-gray-700 text-sm font-medium flex items-center justify-center mx-auto transition-colors">
                                    <span>Lihat Lainnya</span>
                                    <svg class="w-4 h-4 ml-2 transition-transform duration-300" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" id="toggle-icon-arrow">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                            </div>
                        @endif
                    </div>

                    <!-- Footer Action Buttons -->
                    <div class="flex items-center justify-between pt-6">
                        <!-- Back Button -->
                        <a href="{{ route('admin.services.index') }}"
                            class="bg-[#374151] hover:bg-[#1f2937] text-white py-2.5 px-5 rounded-lg inline-flex items-center text-sm font-semibold transition-all shadow-sm">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back
                        </a>

                        <!-- Simpan Button -->
                        <button type="submit"
                            class="bg-[#2563eb] hover:bg-[#1d4ed8] text-white py-2.5 px-6 rounded-lg inline-flex items-center text-sm font-semibold transition-all shadow-md">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"></path>
                            </svg>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Toggle Logic
            const toggleBtn = document.getElementById('toggle-icons-btn');
            const hiddenIcons = document.querySelectorAll('.icon-item-hidden');
            const arrow = document.getElementById('toggle-icon-arrow');
            let expanded = false;

            if (toggleBtn) {
                toggleBtn.addEventListener('click', () => {
                    expanded = !expanded;
                    hiddenIcons.forEach(icon => {
                        if (expanded) {
                            icon.classList.remove('hidden');
                        } else {
                            icon.classList.add('hidden');
                        }
                    });

                    toggleBtn.querySelector('span').textContent = expanded ? 'Sembunyikan' : 'Lihat Lainnya';
                    arrow.style.transform = expanded ? 'rotate(180deg)' : 'rotate(0deg)';
                });
            }
        });
    </script>
</x-app-layout>