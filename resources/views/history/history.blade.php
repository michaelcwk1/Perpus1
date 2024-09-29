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
    </script>
</body>

</html>
