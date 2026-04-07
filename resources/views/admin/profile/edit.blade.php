<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-bold mb-4">Contact Info</h3>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Company Name</label>
                                <input type="text" name="name" value="{{ $profile->name }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                <input type="email" name="email" value="{{ $profile->email }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                                <textarea name="address"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight"
                                    rows="3">{{ $profile->address }}</textarea>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-bold mb-4">Hero Section</h3>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Hero Title</label>
                                <input type="text" name="hero_title" value="{{ $profile->hero_title }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">About Us</label>
                                <textarea name="about_us"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight"
                                    rows="3">{{ $profile->about_us }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Hero Image</label>
                                <input type="file" name="hero_image" class="block w-full text-sm text-gray-500">
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end">
                        <button type="submit"
                            class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700">Save
                            Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>