<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-900 leading-tight">
            Galeri <span class="text-gray-400 font-medium">/</span> Edit Portofolio
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
            <div class="p-10 text-gray-900">
                <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Judul Section -->


                    <!-- Gambar Section -->
                    <div class="mb-12">
                        <label class="block text-gray-900 text-base font-bold mb-3">Gambar Saat Ini</label>
                        @if($portfolio->image_path)
                            <div class="mb-4">
                                <img src="{{ Storage::url($portfolio->image_path) }}" alt="Current"
                                    class="h-40 w-auto rounded-lg border border-gray-100 shadow-sm">
                            </div>
                        @else
                            <div
                                class="mb-4 text-gray-400 text-sm italic border border-dashed border-gray-200 rounded-lg p-4 w-40 text-center">
                                Belum ada gambar
                            </div>
                        @endif

                        <label class="block text-gray-600 text-xs font-semibold mb-2 uppercase tracking-wider">Ganti
                            Gambar (Opsional)</label>
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

                        <div class="flex items-center gap-4">
                            <!-- Delete Button (Trigger) -->
                            <button type="button" onclick="submitDelete()"
                                class="bg-red-50 hover:bg-red-100 text-red-600 p-2.5 rounded-lg inline-flex items-center transition-all border border-red-100"
                                title="Hapus Portofolio">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>

                            <!-- Simpan Button -->
                            <button type="submit"
                                class="bg-[#2563eb] hover:bg-[#1d4ed8] text-white py-2.5 px-8 rounded-lg inline-flex items-center text-sm font-semibold transition-all shadow-md">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4"></path>
                                </svg>
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>

                <form id="delete-form" action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST"
                    class="hidden">
                    @csrf
                    @method('DELETE')
                </form>

                <script>
                    function submitDelete() {
                        if (confirm('Apakah Anda yakin ingin menghapus portofolio ini?')) {
                            document.getElementById('delete-form').submit();
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</x-app-layout>