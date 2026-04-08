<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Layanan') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <!-- Action Button Outside Card -->
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.services.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 flex items-center shadow-sm text-sm font-medium">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah
            </a>
        </div>

        <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
            <div class="p-0"> <!-- Removed padding to flush table -->
                <table class="min-w-full divide-y divide-gray-100">
                    <thead>
                        <tr class="bg-gray-50">
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider w-16">
                                Ikon
                            </th>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Layanan
                            </th>
                            <th
                                class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Deskripsi
                            </th>
                            <th
                                class="px-6 py-4 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @foreach($services as $service)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @php
                                        $iconPath = public_path('icon/' . $service->icon);
                                    @endphp
                                    @if(file_exists($iconPath))
                                        <img src="{{ asset('icon/' . $service->icon) }}" class="w-6 h-6 object-contain" alt="">
                                    @else
                                        <span class="text-gray-400 text-xs">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $service->title }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{ Str::limit($service->description, 80) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium relative">
                                    <div class="relative inline-block text-left">
                                        <button type="button" onclick="toggleDropdown(event, 'dropdown-{{ $service->id }}')"
                                            class="text-gray-400 hover:text-gray-600 inline-block p-1 rounded-full hover:bg-gray-100 focus:outline-none transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                                                </path>
                                            </svg>
                                        </button>

                                        <!-- Dropdown Menu -->
                                        <div id="dropdown-{{ $service->id }}"
                                            class="hidden absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg z-50 border border-gray-100 dropdown-menu transition-all duration-200">
                                            <div class="py-1">
                                                <a href="{{ route('admin.services.edit', $service) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-600 text-left">
                                                    Edit
                                                </a>
                                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="block w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 text-left">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if($services->isEmpty())
                    <div class="p-6 text-center text-gray-500 text-sm">
                        Belum ada layanan yang ditambahkan.
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function toggleDropdown(event, id) {
            event.stopPropagation();
            const dropdown = document.getElementById(id);
            const allDropdowns = document.querySelectorAll('.dropdown-menu');

            // Close all other dropdowns
            allDropdowns.forEach(d => {
                if (d.id !== id) d.classList.add('hidden');
            });

            // Toggle the clicked one
            dropdown.classList.toggle('hidden');
        }

        // Close dropdowns when clicking anywhere else
        document.addEventListener('click', function (event) {
            const allDropdowns = document.querySelectorAll('.dropdown-menu');
            allDropdowns.forEach(d => d.classList.add('hidden'));
        });
    </script>
</x-app-layout>