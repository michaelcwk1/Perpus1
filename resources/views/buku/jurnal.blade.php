<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sejarah UHW Perpus</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/blog/style.css') }}">
    <link rel="icon" href="{{ asset('assets/perpus-smc/images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/home/style.css') }}">
    

    {{-- box icon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
 
</head>

<body >

    {{-- header --}}
    <header class="header" data-header>
        <div class="container">
            <div class="logo-container" style="display: flex; align-items: center;">
                <img src="{{ asset('assets/perpus-smc/images/logo.png') }}" alt="logo" style="width: 50px; height: auto; margin-right: 10px;">
                <a href="{{ route('home') }}" class="logo">UHW Perpus</a>
            </div>

            <div class="mx-10 w-full lg:w-1/2"> <!-- w-full pada layar kecil, w-1/2 pada layar besar -->
                <input type="text" placeholder="Search..."
                    class="w-full px-14 py-2 border border-gray-300 rounded-md focus:outline-none 
                    focus:ring-2 focus:ring-gray-300">
            </div>
            
            <div class="flex items-center space-x-6">
                <a href="{{ route('history') }}" class="text-gray-600 hover:text-gray-400">
                    <i class='bx bx-history text-5xl'></i>
                </a>

                <a href="{{ route('keranjang') }}" class="text-gray-600 hover:text-gray-400">
                    <i class='bx bx-cart text-5xl'></i>
                </a>

                <li class="list-none">
                    @auth
                    <a onclick="showLogout()" href="#" class="text-gray-600 hover:text-gray-400">
                        {{ Auth::user()->name }}
                    </a>
                    <ul id="logoutMenu" class="hidden bg-white shadow-md rounded-md mt-2 p-2">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400">Logout</a>
                        </li>
                    </ul>
                    @endauth
                    @guest
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-400">Login</a>
                    @endguest
                </li>
            </div>
            

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-nav-toggler data-overlay></div>
        </div>
    </header>

    {{-- post content --}}
   

    {{-- post --}}
    <section class="post-content post-container">
         
    </section>

    {{-- footer --}}
    <div class="footer container mx-auto py-4 text-center">
        <p>&#169; UHW Perpus All Right Reserved</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="{{ asset('assets/perpus-smc/js/blog/script.js') }}"></script>

    <script>
        function showLogout() {
            document.getElementById('logoutMenu').classList.toggle('hidden');
        }
    </script>
</body>

</html>
