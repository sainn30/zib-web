<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Company Profile') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased text-gray-900 bg-gray-50">
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">Company</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="text-sm text-gray-700 hover:text-indigo-600">Home</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer class="bg-white border-t mt-12 py-12">
        <p class="text-center text-gray-400">&copy; {{ date('Y') }} Company Name.</p>
    </footer>
</body>

</html>