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

    {{-- box icon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .metamorfosis {
            justify-content: center;
            align-items: center;
            gap: 3px;
        }

        @media only screen and (max-width: 600px) {
            .metamorfosis {
                flex-direction: column;
            }
        }

        .before .after {
            display: flex;
            flex-direction: column;
        }

        .before h4,
        .after h4 {
            text-align: center;
        }

        .gallery {
            --g: 6px;
            display: grid;
            width: 100%;
            aspect-ratio: 1;
            grid: auto-flow 1fr/repeat(3, 1fr);
            gap: var(--g);
        }

        .gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
            transition: .5s
        }

        .gallery img:hover {
            filter: grayscale(0);
        }

        .gallery img:nth-child(2) {
            grid-area: 1/2/span 2/span 2;
            clip-path: polygon(0 0, 100% 0, 100% 100%, calc(50% + var(--g)/4) 100%, 0 calc(50% - var(--g)/4))
        }

        .gallery img:nth-child(3) {
            grid-area: 2/1/span 2/span 2;
            clip-path: polygon(0 0, calc(50% - var(--g)/4) 0, 100% calc(50% + var(--g)/4), 100% 100%, 0 100%);
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="pt-16">

    {{-- header --}}
    <header>
        <div class="nav container mx-auto px-4 py-2 flex justify-between items-center">
            {{-- Logo dan nama UHW Perpus --}}
            <div class="flex items-center space-x-4">
                <img src="{{ asset('assets/perpus-smc/images/logo.png') }}" alt="Logo" class="w-12 h-auto">
                <a href="{{ route('home') }}" class="text-xl font-bold">UHW <span class="text-indigo-600">Perpus</span></a>
            </div>

            {{-- Search Bar --}}
            <div class="flex-grow mx-8">
                <input type="text" placeholder="Search..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            {{-- History, Keranjang, dan User Login --}}
            <div class="flex items-center space-x-6">
                {{-- History --}}
                <a href="{{ route('history') }}" class="text-gray-600 hover:text-indigo-600">
                    <i class='bx bx-history text-2xl'></i>
                </a>

                {{-- Keranjang --}}
                <a href="{{ route('keranjang') }}" class="text-gray-600 hover:text-indigo-600">
                    <i class='bx bx-cart text-2xl'></i>
                </a>

                {{-- Username/Login --}}
                <li class="list-none">
                    @auth
                    <a onclick="showLogout()" href="#" class="text-gray-600 hover:text-indigo-600">
                        {{ Auth::user()->name }}
                    </a>
                    <ul id="logoutMenu" class="hidden bg-white shadow-md rounded-md mt-2 p-2">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                        </li>
                    </ul>
                    @endauth
                    @guest
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-indigo-600">Login</a>
                    @endguest
                </li>
            </div>
        </div>
    </header>

    {{-- post content --}}
    <section class="post-header">
        <div class="header-content post-container">
            <a href="{{ route('home') }}" class="back-home">Back To Home</a>
            <h1 class="header-title">UHW Perpustakaan</h1>
            <img src="{{ asset('assets/perpus-smc/images/1.png') }}" alt="" class="header-img">
        </div>
    </section>

    {{-- post --}}
    <section class="post-content post-container">
        <h2 class="sub-heading">Sejarah UHW Perpus</h2>
        <p class="post-text">Perpustakaan kampus yang berada di Universitas Hayam Wuruk Perbanas sejak tahun 1963...</p>

        {{-- Konten lanjutan --}}
        <div class="metamorfosis">
            <h3 class="post-text font-bold text-xl mt-1 mb-2 text-center">Kondisi ruang Perpustakaan UHW pada tahun ke tahun</h3>
            <div class="before">
                <h3 class="post-text font-bold text-xl mt-3">1. Kondisi Tahun 2016 sampai 2018</h3>
                <div class="gallery">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                </div>
            </div>

            <div class="midle">
                <h3 class="post-text font-bold text-xl mt-3">2. Kondisi Tahun 2019 sampai 2022</h3>
                <div class="gallery">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                </div>
            </div>

            <div class="after">
                <h3 class="post-text font-bold text-xl mt-3">3. Kondisi Tahun 2023 sampai Sekarang</h3>
                <div class="gallery">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                </div>
            </div>
        </div>
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
