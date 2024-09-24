<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
    
        @vite('resources/css/app.css')
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body class="bg-gray-100">
        <header class="bg-white shadow-md">
            <nav class="container mx-auto px-4 py-3 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('assets/perpus-smc/images/logo.png') }}" alt="Logo" class="w-10 h-auto">
                    <a href="{{ route('home') }}" class="text-xl font-bold">UHW <span class="text-blue-600">Perpus</span></a>
                </div>
    
                <div class="flex-1 max-w-xl mx-4">
                    <div class="relative">
                        <input type="text" placeholder="Search books..." class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <button class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <i class='bx bx-search text-gray-400'></i>
                        </button>
                    </div>
                </div>
    
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-blue-600" title="History">
                        <i class='bx bx-history text-2xl'></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-600" title="Cart">
                        <i class='bx bx-cart text-2xl'></i>
                    </a>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition duration-300">Login</a>
                </div>
            </nav>
        </header>
    
        <main class="container mx-auto px-4 py-8">
            @yield('content')
        </main>
    
        <footer class="bg-white border-t mt-12">
            <div class="container mx-auto px-4 py-6 text-center text-gray-600">
                <p>&copy; {{ date('Y') }} Perpustakaan Smecone. All Rights Reserved.</p>
            </div>
        </footer>
    
        @vite('resources/js/app.js')
    </body>
</html>
