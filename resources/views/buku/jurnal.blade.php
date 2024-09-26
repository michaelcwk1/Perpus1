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
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
.custom-card {
    width: 800px;  
    max-width: 90%;  
    height: auto;  
    overflow-y: auto;  
}

.custom-card img {
    width: auto; 
    height: auto;  
    max-width: 100%;  
}

.image-container {
    display: flex;  
    justify-content: center; 
    margin-bottom: 5rem;  
}

</style>

<body>

    {{-- header --}}
    <header class="header" data-header>
        <div class="container">
            <div class="logo-container" style="display: flex; align-items: center;">
                <img src="{{ asset('assets/perpus-smc/images/logo.png') }}" alt="logo" style="width: 50px; height: auto; margin-right: 10px;">
                <a href="{{ route('home') }}" class="logo">UHW Perpus</a>
            </div>

            <div class="mx-10 w-full lg:w-1/2">
                <input type="text" placeholder="Search..."
                    class="w-full px-14 py-2 border border-gray-300 rounded-md focus:outline-none 
                    focus:ring-2 focus:ring-gray-300">
            </div>
            
            <div class="flex items-center space-x-12"> <!-- Increased space from 6 to 8 -->
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
 
    {{-- List Book --}}
    <section class="section" >
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                @foreach($books as $book)
                <!-- Card Book -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden h-full border border-gray-200 w-full md:w-180 lg:w-200">
                    <div class="relative">
                        <img src="{{ asset('assets/buku/jurnal/' . $book['image']) }}" alt="{{ $book['title'] }}" class="w-full h-full object-contain p-4">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">{{ $book['title'] }}</h3>
                        <div class="flex justify-between items-center space-x-2"> <!-- Center the buttons and added space between them -->
                            <a href="" class="btn text-center">Pinjam</a>
                            <button type="button" class="btn text-center detail" data-modal-toggle="detailModal-{{ $loop->index }}">Detail</button>
                        </div>
                    </div>
                </div>
                
                
                <!-- Modal -->
                <div id="detailModal-{{ $loop->index }}" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-center justify-center min-h-screen px-4 text-center">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                
                        <div class="inline-block custom-card p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-lg">
                            <div class="flex justify-between">
                                <h3 class="text-md font-bold" id="modal-title">{{ $book['title'] }}</h3>
                                <button class="close-button" data-modal-toggle="detailModal-{{ $loop->index }}">✖</button>
                            </div>
                            <div class="image-container"> <!-- Added div for centering the image -->
                                <img src="{{ asset('assets/buku/jurnal/' . $book['image']) }}" alt="{{ $book['title'] }}" class="mt-3 w-auto h-auto object-contain">

                            </div>
                            <p class="mt-3"><strong>Deskripsi Buku:</strong><br>{{ $book['description'] }}</p>
                            <div class="flex justify-center mt-4">
                                <a href="" class="btn1  pinjam">Pinjam Buku</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </section>

    {{-- footer --}}
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-bottom">
                <h5 class="copyright ">
                    Copyright 2024 UHW Perpus. All Right Reserved
                </h5>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="{{ asset('assets/perpus-smc/js/blog/script.js') }}"></script>

    <script>
        $(document).ready(function () {
            // Open modal
            $('.detail').on('click', function () {
                const modalId = $(this).data('modal-toggle');
                $(`#${modalId}`).removeClass('hidden');
            });

            // Close modal
            $('.close-button, .overlay').on('click', function () {
                const modalId = $(this).closest('.fixed').attr('id');
                $(`#${modalId}`).addClass('hidden');
            });
        });
    </script>

</body>

</html>
