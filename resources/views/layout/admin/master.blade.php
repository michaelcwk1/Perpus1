<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/blog/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/book/listbook.css') }}">
    
    {{-- Box Icon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    {{-- Header --}}
    <header>
        <div class="nav container">
            <div class="logo-container">
                <img src="{{ asset('assets/perpus-smc/images/logo.png') }}" alt="" style="width: 50px; height: auto;">
                <a href="{{ route('home') }}" class="logo">UHW<span> Perpus</span></a>
            </div>

            <div class="search-container">
                <input type="text" placeholder="Search...">
            </div>

            <div class="nav-icons">
                <i class='bx bx-history' title="History"></i>
                <i class='bx bx-cart' title="Cart"></i>
            </div>
        </div>
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer container">
        <p>&#169; Perpustakaan Smecone All Right Reserved</p>
    </footer>

    <script src="{{ asset('assets/perpus-smc/js/gallery/scriptc.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/perpus-smc/js/blog/script.js') }}"></script>
</body>
</html>
