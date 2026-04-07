<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-900 leading-tight">
            Galeri <span class="text-gray-400 font-medium">/</span> Tambah Portofolio
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
            <div class="p-10 text-gray-900">
                <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Judul Section -->


                    <!-- Gambar Section -->
                    <div class="mb-12">
                        <label class="block text-gray-900 text-base font-bold mb-3">Gambar</label>
                        <input type="file" name="image"
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 transition-colors cursor-pointer">
                    </div>

                    <!-- Footer Buttons -->
                    <div class="flex items-center justify-between pt-6">
                        <!-- Back Button -->
                        <a href="{{ route('admin.portfolios.index') }}"
                            class="bg-[#374151] hover:bg-[#1f2937] text-white py-2.5 px-5 rounded-lg inline-flex items-center text-sm font-semibold transition-all shadow-sm">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back
                        </a>

                        <!-- Save Button -->
                        <button type="submit"
                            class="bg-[#2563eb] hover:bg-[#1d4ed8] text-white py-2.5 px-8 rounded-lg inline-flex items-center text-sm font-semibold transition-all shadow-md">
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
</x-app-layout>