<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UHW Perpus</title>

    <link rel="stylesheet" href="{{ asset('assets/perpus-smcn.svg') }}">
    <link rel="icon" href="{{ asset('assets/perpus-smc/images/logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Rosario:wght@500;600;700&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/home/style.css') }}">

    <link rel="preload" as="image" href="{{ asset('assets/perpus-smc/images/hero-banner-1.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('assets/perpus-smc/images/hero-banner-2.jpg') }}">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .dis-none{
            display: none;
        }
        .logout{
            width: 100%;
            background-color: white;
            text-align:center;
        }
    </style>
</head>
<body>

    {{-- header --}}

    <header class="header" data-header>
        <div class="container">
            <div class="logo-container" style="display: flex; align-items: center;">
                <img src="assets/perpus-smc/images/logo.png" alt="logo" style="width: 50px; height: auto; margin-right: 10px;">
                <a href="{{ route('home') }}" class="logo">UHW Perpus</a>
            </div>

            <nav class="navbar" data-navbar>
                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>
            
                <ul class="navbar-list">
                    <li>
                        <a href="#home" class="navbar-link">Home</a>
                    </li>
                    <li>
                        <a href="#aboutus" class="navbar-link">About Us</a>
                    </li>
                    <li>
                        <a href="#gallery" class="navbar-link">Buku</a>
                    </li>
                    <li>
                        <a href="#berita" class="navbar-link">Berita</a>
                    </li>
                    <li>
                        <a href="#footer" class="navbar-link">Contact Us</a>
                    </li>
                    <li>
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

    <main>
        <article>

            {{-- hero --}}

            <section class="section hero" aria-label="home" id="home">
                <div class="container">

                    <div class="hero-content" data-aos="fade-up-right" data-aos-duration="2000">
                        <h1 class="h2 hero-title">UHW Perpus <span class="span"  style="font-size: 40px; white-space: nowrap;">Universitas Hayam Wuruk Perbanas</span></h1>
                        <p class="section-text" >Melayani dengan hati menuju perpustakaan digital.</p>
                        <a href="#aboutus" class="btn"  style="margin-left: 0;">
                            <span class="span">See More</span>
                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>
                    </div>

                    <div class="wrapper" data-aos="fade-up" data-aos-duration="2000">
                        <div class="hero-banner-1 img-holder" style="--width: 400; --height: 550;">
                            <img src="{{ asset('assets/perpus-smc/images/1.png') }}" width="400" height="550" class="img-cover"
                            alt="view of assortment of decor for interior shop">
                        </div>
                        <div class="hero-banner-2 img-holder" style="--width: 500; --height: 850;">
                            <img src="{{ asset('assets/perpus-smc/images/1.png') }}" width="500" height="850" class="img-cover"
                            alt="ceramic craft ware">
                        </div>

                        <img src="{{ asset('assets/perpus-smc/images/hero-shape.png') }}" width="570" height="676" class="shape"
                        alt="laves">
                    </div>

                </div>
            </section>


            {{-- about --}}

            <section class="section about" aria-label="about" id="aboutus">
                <div class="container">
                    <div class="wrapper">
                        <figure class="about-banner about-banner-1 img-holder" data-aos="fade-down-right" data-aos-duration="2000" style="--width: 600; --height: 480;">
                            <img src="{{ asset('assets/perpus-smc/images/1.png') }}" width="600" height="480" loading="lazy"
                            alt="craftman in workshop" class="img-cover">
                        </figure>
                        <h2 class="h2 section-title" data-aos="zoom-in-right" data-aos-duration="2000">Perpustakaan ini berdiri sejak 2022</h2>
                    </div>

                    <figure class="about-banner about-banner-2 img-holder" data-aos="fade-down" data-aos-duration="2000" style="--width: 500; --height: 700;">
                        <img src="{{ asset('assets/perpus-smc/images/1.png') }}" width="500" height="700" loading="lazy"
                        alt="interior view of a leather shop selling belts brac" class="img-cover">
                    </figure>

                    <div class="about-content" data-aos="zoom-in-left" data-aos-duration="2000">
                        <h3 class="h2 section-title">Sejarah UHW Perpus</h3>
                        <p class="section-text">Perpustakaan Kampus yang berada di Universitas Hayam Wuruk Perbanas sejak tahun 2024 di beri nama "UHW Perpus" </p>
                        <a href="{{ route('about') }}" class="btn">
                            <span class="span">Read More</span>
                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>

                        <figure class="about-banner about-banner-3 img-holder" data-aos="fade-up-left" data-aos-duration="2000" style="--width: 850; --height: 420;">
                            <img src="{{ asset('assets/perpus-smc/images/1.png') }}" width="850" height="420" loading="lazy"
                            alt="concentrated artisans in workshop" class="img-cover">
                        </figure>
                    </div>
                </div>
            </section>


            {{-- visi-misi --}}
            <section id="visimisi">

            </section>  

 


            {{-- gallery --}}

            <section class="gallery section collection text-center" aria-labelledby="collection-label" id="gallery">

                <div class="container">
                    <h2 class="h2 section-title" id="collection-label">
                        Koleksi Buku
                    </h2>
            
                    <p class="section-text">
                        Koleksi Buku UHW Perpus
                    </p>
                </div>
            
                <ul class="gallery-list">
                    <li>
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/1.png') }}')" data-aos="flip-right" data-aos-duration="2000">
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    Skripsi
                                </h3>
                                <a href="{{ route('gallery-smecone') }}" class="btn-link">
                                    <span class="span">View Koleksi</span>
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </li>
            
                    <li>
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/1.png') }}')" data-aos="flip-right" data-aos-duration="2000">
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    Jurnal Ilmiah
                                </h3>
                                <a href="{{ route('gallery-jurnal') }}" class="btn-link">
                                    <span class="span">View Koleksi</span>
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </li>
            
                    <li>
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/1.png') }}')" data-aos="flip-right" data-aos-duration="2000">
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    Artikel Penelitian
                                </h3>
                                <a href="{{ route('gallery-artikel') }}" class="btn-link">
                                    <span class="span">View Koleksi</span>
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </li>
            
                    <li>
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/1.png') }}')" data-aos="flip-right" data-aos-duration="2000">
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    Disertasi
                                </h3>
                                <a href="{{ route('gallery-disertasi') }}" class="btn-link">
                                    <span class="span">View Koleksi</span>
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            


{{-- berita --}}
            <section class="section1 blog" aria-labelledby="blog-label" id="berita">
                <div class="container">
                    <h2 class="h2 section-title text-center" id="blog-label">
                        Informasi
                    </h2>
                    <p class="section-text text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
                    <ul class="grid-list">
                        @foreach ($article as $a)
                        <li>
                            <div class="blog-card" data-aos="zoom-in-up" data-aos-duration="2000">
                                <figure class="card-banner img-holder" style="--width: 1024; --height: 683;">
                                    <img src="{{ asset('cover-image/'.$a->image_header) }}" width="1024" height="683" loading="lazy"
                                     alt="The Detail Process Of Decorating The Clay Vase At Pottery Studio" class="img-cover">
                                </figure>
                                <div class="card-content">
                                    <h3 class="h4">
                                        <a href="{{ route('post', ['article'=>$a->slug]) }}" class="card-title">
                                            {{ $a->title }}
                                        </a>
                                    </h3>
                                    <div class="card-meta">
                                        <a href="#" class="card-meta-wrapper">
                                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">{{ $a->author }}</span>
                                        </a>
                                        <time class="card-meta-wrapper" datetime="2024-04-18">
                                            <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                                            <span class="span">{{ $a->created_at->diffForHumans() }}</span>
                                        </time>

                                        <a href="#" class="card-meta-wrapper">
                                            <ion-icon name="folder-open-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">{{ $a->categories->name }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('blog') }}" class="btn">
                        <span class="span">Read More</span>
                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>
                </div>
            </section>

        </article>
    </main>


    {{-- footer --}}

    <footer class="footer" id="footer">
        <div class="container">
            <div class="section footer-top">
                <div class="footer-brand">
                    <a href="#" class="logo">UHW Perpus</a>
                    <p class="footer-text">
                        UHW Perpus adalah pusat informasi dan pembelajaran yang mendukung di era Digital. Dengan Menyediakan berbagai layanan dan sumber daya yang dirancang untuk meningkatkan pengetahuan dan keterampilan.
                    </p>
                    <ul class="social-list">
                        <li>
                            <a href="#" class="social-link">
                                @ UHW_Perpus@gmail.com
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/libs_smecon?igsh=NzMwMWw0ZWtoZ2Q=" target="_blank" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>UHW-Perpus
                            </a>
                        </li>
                    </ul>
                </div>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Explore Us</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Visi & Misi</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">BI Corner</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Buku</a>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Explore Us</p>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Gallery</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Blog & Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="footer-link">Masuk / Daftar</a>
                    </li>
                    @auth
                    @if(Auth::user()->role === 'admin')
                        <li>
                            <a href="{{ route('dashboard') }}" class="footer-link">Admin Panel</a>
                        </li>
                        @endif
                    @endauth
                </ul>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Support</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">UHW Perbanas</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">BI Corner</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Perpustakaan Nasional</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Perpustakaan Daerah</a>
                    </li>
                </ul>

                {{-- <div class="footer-list">
                    <p class="footer-list-title">Get In Touch</p>
                    <p class="footer-text">
                        Hubungi kami pada kontak yang tertera
                    </p>
                    <a href="#" class="btn">
                        <span class="span">Contact Us</span>
                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>
                </div> --}}
            </div>

            <div class="footer-bottom">
                <p class="copyright">
                    Copyright 2024 UHW Perpus. All Right Reserved
                </p>
            </div>
        </div>
    </footer>


    {{-- js --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
            function showLogout() {
                const showLogout  = document.getElementById("showLogout");
                showLogout.classList.remove("dis-none");
            }
        </script>
    <script src="{{ asset('assets/perpus-smc/js/home/script.js') }}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
