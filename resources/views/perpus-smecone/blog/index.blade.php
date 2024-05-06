<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Smecone</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/blog/style.css') }}">

    {{-- box icon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    {{-- header --}}

    <header>
        <div class="nav container">
            {{-- logo --}}
            <a href="#" class="logo">Perpustakaan<span> Smecone</span></a>

            {{-- login --}}
            {{-- <a href="" class="login">Login</a> --}}
        </div>
    </header>

    {{-- home --}}
    <section class="home" id="home">
        <div class="home-text container">
            <a href="{{ route('home') }}" class="back-home">Back To Home</a>
            <h2 class="home-title">Perpustakaan Smecone Blog</h2>
            <span class="home-subtitle">Your Source of Great Content</span>
        </div>
    </section>

    {{-- post filter --}}
    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter='all'>All</span>
        <span class="filter-item" data-filter='literasi'>Literasi</span>
        <span class="filter-item" data-filter='kegiatan'>Kegiatan</span>
        <span class="filter-item" data-filter='buku'>Buku</span>
    </div>

    {{-- post --}}
    <section class="post container">
        <div class="post-box buku">
            <img src="{{ asset('assets/perpus-smc/images/blog/blog-1.jpeg') }}" alt="" class="post-img">
            <h2 class="category">buku</h2>
            <a href="{{ route('post') }}" class="post-title">Latihan Menulis dan Kemampuan dasar Literasi</a>
            <span class="post-date">April 18, 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam suscipit deserunt rem explicabo, eum ipsa sequi possimus necessitatibus earum voluptas, et error sint totam dolore in tenetur, praesentium unde ab?</p>
            <div class="profile">
                <img src="{{ asset('assets/perpus-smc/images/blog/profile/vindra.jpeg') }}" alt="" class="profile-img">
                <span class="profile-name">Vindra Arya Yulian</span>
            </div>
        </div>
        <div class="post-box buku">
            <img src="{{ asset('assets/perpus-smc/images/blog/blog-1.jpeg') }}" alt="" class="post-img">
            <h2 class="category">buku</h2>
            <a href="{{ route('post') }}" class="post-title">Latihan Menulis dan Kemampuan dasar Literasi</a>
            <span class="post-date">April 18, 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam suscipit deserunt rem explicabo, eum ipsa sequi possimus necessitatibus earum voluptas, et error sint totam dolore in tenetur, praesentium unde ab?</p>
            <div class="profile">
                <img src="{{ asset('assets/perpus-smc/images/blog/profile/vindra.jpeg') }}" alt="" class="profile-img">
                <span class="profile-name">Vindra Arya Yulian</span>
            </div>
        </div>
        <div class="post-box kegiatan">
            <img src="{{ asset('assets/perpus-smc/images/blog/blog-1.jpeg') }}" alt="" class="post-img">
            <h2 class="category">Kegiatan</h2>
            <a href="" class="post-title">Latihan Menulis dan Kemampuan dasar Literasi</a>
            <span class="post-date">April 18, 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam suscipit deserunt rem explicabo, eum ipsa sequi possimus necessitatibus earum voluptas, et error sint totam dolore in tenetur, praesentium unde ab?</p>
            <div class="profile">
                <img src="{{ asset('assets/perpus-smc/images/blog/profile/vindra.jpeg') }}" alt="" class="profile-img">
                <span class="profile-name">Vindra Arya Yulian</span>
            </div>
        </div>
        <div class="post-box literasi">
            <img src="{{ asset('assets/perpus-smc/images/blog/blog-1.jpeg') }}" alt="" class="post-img">
            <h2 class="category">literasi</h2>
            <a href="" class="post-title">Latihan Menulis dan Kemampuan dasar Literasi</a>
            <span class="post-date">April 18, 2024</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam suscipit deserunt rem explicabo, eum ipsa sequi possimus necessitatibus earum voluptas, et error sint totam dolore in tenetur, praesentium unde ab?</p>
            <div class="profile">
                <img src="{{ asset('assets/perpus-smc/images/blog/profile/vindra.jpeg') }}" alt="" class="profile-img">
                <span class="profile-name">Vindra Arya Yulian</span>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <div class="footer container">
        <p>&#169; Perpustakaan Smecone All Right Reserved</p>
        <div class="social">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/perpus-smc/js/blog/script.js') }}"></script>
</body>
</html>
