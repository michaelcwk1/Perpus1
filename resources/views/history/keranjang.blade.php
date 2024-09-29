<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UHW Perpus - Loan History</title>

    <link rel="stylesheet" href="{{ asset('assets/perpus-smcn.svg') }}">
    <link rel="icon" href="{{ asset('assets/perpus-smc/images/logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Rosario:wght@500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/blog/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/home/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/book/card.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .dis-none {
            display: none;
        }

        .logout {
            width: 100%;
            background-color: white;
            text-align: center;
        }

        .book-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
        }

        .book-item {
            display: flex;
            align-items: center;
            background-color: #f0f0f0;
            padding: 1rem;
            border-radius: 8px;
        }

        .book-image {
            width: 100px;
            height: auto;
            margin-right: 1rem;
        }

        .book-info {
            flex-grow: 1;
        }

        .borrow-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header" data-header>
        <div class="container">
            <div class="logo-container" style="display: flex; align-items: center;">
                <img src="{{ asset('assets/perpus-smc/images/logo.png') }}" alt="logo"
                    style="width: 50px; height: auto; margin-right: 10px;">
                <a href="{{ route('home') }}" class="logo">UHW Perpus</a>
            </div>

            <nav class="navbar" data-navbar>
                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>

                <ul class="navbar-list">

                    @auth
                        <a onclick="showLogout()" href="#" class="navbar-link">{{ Auth::user()->name }}</a>
                        <ul class="logout dis-none" id="showLogout">
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" class="navbar-link">Login</a>
                    @endguest
                    </li>
                </ul>
            </nav>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-nav-toggler data-overlay></div>
        </div>
    </header>

    <!-- Main Content -->
<section class="section">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold mb-6">Pending Loan Requests</h1>
            <div class="book-list shadow-sm grid">
                @forelse($cartItems as $index => $item)
                <div class="book-item">
                    <div class="book-images">
                        @php
                            $folders = ['skripsi', 'jurnal', 'diserti', 'artikel'];
                            $imageDisplayed = false;
                        @endphp
                        @foreach($folders as $folder)
                            @php
                                $imagePath = 'assets/buku/' . $folder . '/' . $item['book_image'];
                            @endphp
                            @if(!$imageDisplayed && file_exists(public_path($imagePath)))
                                <img src="{{ asset($imagePath) }}" 
                                     alt="{{ $item['book_title'] }}" 
                                     class="book-image"
                                     onerror="this.style.display='none'"
                                     onload="this.style.display='block'; this.parentElement.style.pointerEvents='none';">
                                @php $imageDisplayed = true; @endphp
                            @endif
                        @endforeach
                    </div>
                    <div class="book-info">
                        <h2 class="text-xl font-semibold">{{ $item['book_title'] }}</h2>
                        <p>Peminjam: {{ $item['user_name'] }}</p>
                        <p>Email: {{ $item['user_email'] }}</p>
                        <p>Tanggal Pinjam: {{ $item['borrow_date'] }}</p>
                        <p>Tanggal Kembali: {{ $item['return_date'] }}</p>
                    </div>
                    <div>
                        <button class="borrow-button edit-btn mb-5" onclick="openModal({{ $index }})">Edit</button>
                        <form action="{{ route('keranjang.delete', $index) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="borrow-button" style="background-color: #f44336;">Hapus</button>
                        </form>
                    </div>
                </div>
                
                    <!-- Modal -->
                    <div id="editModal{{ $index }}" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal({{ $index }})">&times;</span>
                            <h2 class="text-xl font-semibold mb-4">Edit Peminjaman</h2>
                            <form action="{{ route('keranjang.update', $index) }}" method="POST" class="space-y-4 text-left">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="book_id" value="{{ $item['book_id'] }}">
                                <input type="hidden" name="book_title" value="{{ $item['book_title'] }}">
                                <input type="hidden" name="book_image" value="{{ $item['book_image'] }}">
                                
                                <div>
                                    <label for="userName-{{ $index }}" class="block text-xl font-medium text-gray-700">Nama</label>
                                    <input type="text" id="userName-{{ $index }}" name="user_name" value="{{ $item['user_name'] }}" class="block w-full mt-1 border border-gray-300 shadow-md" required>
                                </div>
                                
                                <div>
                                    <label for="email-{{ $index }}" class="block text-xl font-medium text-gray-700">Email</label>
                                    <input type="email" id="email-{{ $index }}" name="user_email" value="{{ $item['user_email'] }}" class="block w-full mt-1 border border-gray-300 shadow-md" required>
                                </div>
                                
                                <div>
                                    <label for="borrowDate-{{ $index }}" class="block text-xl font-medium text-gray-700">Tanggal Pinjam</label>
                                    <input type="date" id="borrowDate-{{ $index }}" name="borrow_date" value="{{ $item['borrow_date'] }}" class="block w-full mt-1 border border-gray-300 shadow-md" required>
                                </div>
                                
                                <div>
                                    <label for="returnDate-{{ $index }}" class="block text-xl font-medium text-gray-700">Tanggal Kembali</label>
                                    <input type="date" id="returnDate-{{ $index }}" name="return_date" value="{{ $item['return_date'] }}" class="block w-full mt-1 border border-gray-300 shadow-md" required>
                                </div>
                                
                                <div class="flex justify-end space-x-2">
                                    <button type="button" onclick="closeModal({{ $index }})" class="btn" style="background-color: #f44336;">Batal</button>
                                    <button type="submit" class="btn">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada buku dalam keranjang.</p>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer id="footer">
        <!-- Add your footer content here -->
    </footer>

    <script>
        function showLogout() {
            const logoutMenu = document.getElementById('showLogout');
            logoutMenu.classList.toggle('dis-none');
        }

        function openModal(index) {
            document.getElementById('editModal' + index).style.display = 'block';
        }

        function closeModal(index) {
            document.getElementById('editModal' + index).style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target.className === 'modal') {
                event.target.style.display = 'none';
            }
        }
    </script>
</body>

</html>
