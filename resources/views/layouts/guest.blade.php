<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Company Profile') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Tailwind CDN for quick setup -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased text-gray-900 bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">Company</a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#about"
                            class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">About</a>
                        <a href="#services"
                            class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">Services</a>
                        <a href="#portfolio"
                            class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">Portfolio</a>
                    </div>
                </div>
                <div class="flex items-center">
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <footer class="bg-white border-t mt-12">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
            <p class="mt-8 text-center text-base text-gray-400">&copy; {{ date('Y') }} Company Name. All rights
                reserved.</p>
        </div>
    </footer>
</body>

</html>