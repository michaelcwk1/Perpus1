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
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/book/card.css') }}">


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
 
<body>

    {{-- header --}}
    <header class="header" data-header>
        <div class="container">
            <div class="logo-container" style="display: flex; align-items: center;">
                <img src="{{ asset('assets/perpus-smc/images/logo.png') }}" alt="logo"
                    style="width: 50px; height: auto; margin-right: 10px;">
                <a href="{{ route('home') }}" class="logo">UHW Perpus</a>
            </div>

            <div class="mx-10 w-full lg:w-1/2">
                <input type="text" placeholder="Search..."
                    class="w-full px-14 py-2 border border-gray-300 rounded-md focus:outline-none 
                    focus:ring-2 focus:ring-gray-300">
            </div>

            <div class="flex items-center space-x-12">
                <a href="{{ route('history') }}" class="text-gray-600 hover:text-gray-400">
                    <i class='bx bx-history text-5xl'></i>
                </a>

                <a href="{{ route('keranjang1') }}" class="text-gray-600 hover:text-gray-400">
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
    <section class="section">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                @foreach ($books as $book)
                    <!-- Card Book -->
                    <div
                        class="bg-white shadow-xl rounded-lg overflow-hidden h-full border border-gray-200 w-full md:w-180 lg:w-200 flex flex-col justify-between">
                        <div class="relative p-4">
                            <img src="{{ asset('assets/buku/jurnal/' . $book['image']) }}" alt="{{ $book['title'] }}"
                                class="w-full h-full object-contain">
                        </div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-xl font-semibold mb-4">{{ $book['title'] }}</h3>
                        </div>
                        <div class="p-4 mt-auto flex justify-between items-center space-x-2">
                            <button type="button" class="btn text-center detail"
                                data-modal-toggle="pinjamModal-{{ $loop->index }}">Pinjam</button>
                            <button type="button" class="btn text-center detail"
                                data-modal-toggle="detailModal-{{ $loop->index }}">Detail</button>
                        </div>
                    </div>

                    <!-- Modal Pinjam -->
                    <div id="pinjamModal-{{ $loop->index }}" class="fixed inset-0 z-50 hidden overflow-y-auto"
                        aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div class="flex items-center justify-center min-h-screen px-4 text-center">
                            <!-- Background overlay -->
                            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>

                            <!-- Modal content -->
                            <div
                                class="inline-block custom-card p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-lg">
                                <div class="flex justify-between">
                                    <h3 class="text-md font-bold" id="modal-title">{{ $book['title'] }}</h3>
                                    <button class="close-button"
                                        data-modal-toggle="pinjamModal-{{ $loop->index }}">✖</button>
                                </div>
                                <div class="image-container">
                                    <img src="{{ asset('assets/buku/jurnal/' . $book['image']) }}"
                                        alt="{{ $book['title'] }}" class="mt-3 w-auto h-auto object-contain">
                                </div>

                                <form action="{{ route('keranjang2') }}" method="POST" class="space-y-4 text-left">
                                    @csrf
                                    <input type="hidden" name="book_id" value="{{ $book['id'] }}">
                                    <input type="hidden" name="book_title" value="{{ $book['title'] }}">
                                    <input type="hidden" name="book_image" value="{{ $book['image'] }}">
                                    
                                    <!-- Nama Input -->
                                    <div>
                                        <label for="userName-{{ $book['id'] }}" class="block text-xl font-medium text-gray-700">Nama</label>
                                        <input type="text" id="userName-{{ $book['id'] }}" name="user_name" class="block w-full mt-1 border border-gray-300 shadow-md" placeholder="Nama" required>
                                    </div>
                                
                                    <!-- Email Input -->
                                    <div>
                                        <label for="email-{{ $book['id'] }}" class="block text-xl font-medium text-gray-700">Email</label>
                                        <input type="email" id="email-{{ $book['id'] }}" name="user_email" class="block w-full mt-1 border border-gray-300 shadow-md" placeholder="Email" required>
                                    </div>
                                
                                    <!-- Tanggal Pinjam Input -->
                                    <div>
                                        <label for="borrowDate-{{ $book['id'] }}" class="block text-xl font-medium text-gray-700">Tanggal Pinjam</label>
                                        <input type="date" id="borrowDate-{{ $book['id'] }}" name="borrow_date" class="block w-full mt-1 border border-gray-300 shadow-md" required>
                                    </div>
                                
                                    <!-- Tanggal Kembali Input -->
                                    <div>
                                        <label for="returnDate-{{ $book['id'] }}" class="block text-xl font-medium text-gray-700">Tanggal Kembali</label>
                                        <input type="date" id="returnDate-{{ $book['id'] }}" name="return_date" class="block w-full mt-1 border border-gray-300 shadow-md" required>
                                    </div>
                                
                                    <!-- Submit Button -->
                                    <div class="flex justify-center">
                                        <button type="submit" class="btn">Pinjam</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- Modal Detail -->
                    <div id="detailModal-{{ $loop->index }}" class="fixed inset-0 z-50 hidden overflow-y-auto"
                        aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div class="flex items-center justify-center min-h-screen px-4 text-center">
                            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>

                            <div
                                class="inline-block custom-card p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-lg">
                                <div class="flex justify-between">
                                    <h3 class="text-md font-bold" id="modal-title">{{ $book['title'] }}</h3>
                                    <button class="close-button"
                                        data-modal-toggle="detailModal-{{ $loop->index }}">✖</button>
                                </div>

                                <!-- Image and Description -->
                                <div class="image-container">
                                    <img src="{{ asset('assets/buku/jurnal/' . $book['image']) }}"
                                        alt="{{ $book['title'] }}" class="mt-3 w-auto h-auto object-contain">
                                </div>
                                <p class="mt-3"><strong>Deskripsi Buku:</strong><br>{{ $book['description'] }}</p>

                                <!-- Pinjam Button (With data-modal-target) -->
                                <div class="flex justify-center mt-4">
                                    <button type="button" class="btn text-center detail"
                                        data-modal-toggle="detailModal-{{ $loop->index }}"
                                        data-modal-target="pinjamModal-{{ $loop->index }}">
                                        Pinjam
                                    </button>
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
    document.addEventListener('DOMContentLoaded', () => {
    // Function to close a modal
    const closeModal = (modalId) => {
        document.getElementById(modalId).classList.add('hidden');
    };

    // Function to open a modal
    const openModal = (modalId) => {
        document.getElementById(modalId).classList.remove('hidden');
    };

    // Handle "Pinjam" button click in detail modal
    document.querySelectorAll('.detail[data-modal-target]').forEach((button) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const detailModalId = button.closest('.fixed').id;
            const pinjamModalId = button.getAttribute('data-modal-target');

            closeModal(detailModalId);
            setTimeout(() => {
                openModal(pinjamModalId);
            }, 300); // Delay to ensure smooth transition
        });
    });

    // Handle close button clicks
    document.querySelectorAll('.close-button').forEach((closeBtn) => {
        closeBtn.addEventListener('click', (event) => {
            const modalId = closeBtn.closest('.fixed').id;
            closeModal(modalId);
        });
    });

    // Handle "Pinjam" button click to open form modal directly
    document.querySelectorAll('.detail[data-modal-toggle]:not([data-modal-target])').forEach((button) => {
        button.addEventListener('click', (event) => {
            const modalId = button.getAttribute('data-modal-toggle');
            openModal(modalId);
        });
    });
});
    </script>

</body>

</html>