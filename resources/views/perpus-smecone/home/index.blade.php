<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan SMK N 1 Purwokerto</title>

    <link rel="stylesheet" href="{{ asset('assets/perpus-smcn.svg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Rosario:wght@500;600;700&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/home/style.css') }}">

    <link rel="preload" as="image" href="{{ asset('assets/perpus-smc/images/hero-banner-1.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('assets/perpus-smc/images/hero-banner-2.jpg') }}">
</head>
<body>

    {{-- header --}}

    <header class="header" data-header>
        <div class="container">
            <a href="{{ route('dashboard') }}" class="logo">Perpustakaan Smecone</a>

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
                        <a href="#visimisi" class="navbar-link">Visi & Misi</a>
                    </li>
                    <li>
                        <a href="" class="navbar-link">Contact Us</a>
                    </li>
                    <li>
                        <a href="#book" class="navbar-link">Book</a>
                    </li>
                    <li>
                        <a href="#gallery" class="navbar-link">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="navbar-link">Blog</a>
                    </li>

                    <li>
                        <a href="{{ route('dashboard') }}" class="navbar-link">Dasboard</a>
                    </li>

                    <li>
                        <a href="#contactus" class="navbar-link">Contact Us</a>
                    </li>
                    {{-- <li>
                        <a href="" class="navbar-link">{{ Auth::user()->name }}</a>
                    </li> --}}
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

                    <div class="hero-content">
                        <h1 class="h2 hero-title">Perpustakaan Smecone <span class="span">SMK N 1 Purwokerto</span></h1>
                        <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <a href="#aboutus" class="btn">
                            <span class="span">See More</span>
                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>
                    </div>

                    <div class="wrapper">
                        <div class="hero-banner-1 img-holder" style="--width: 400; --height: 550;">
                            <img src="{{ asset('assets/perpus-smc/images/hero-banner-1.jpeg') }}" width="400" height="550" class="img-cover"
                            alt="view of assortment of decor for interior shop">
                        </div>
                        <div class="hero-banner-2 img-holder" style="--width: 500; --height: 850;">
                            <img src="{{ asset('assets/perpus-smc/images/hero-banner-2.jpeg') }}" width="500" height="850" class="img-cover"
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
                        <figure class="about-banner about-banner-1 img-holder" style="--width: 600; --height: 480;">
                            <img src="{{ asset('assets/perpus-smc/images/about-1.jpeg') }}" width="600" height="480" loading="lazy"
                            alt="craftman in workshop" class="img-cover">
                        </figure>
                        <h2 class="h2 section-title">Perpustakaan ini berdiri sejak 1963</h2>
                    </div>

                    <figure class="about-banner about-banner-2 img-holder" style="--width: 500; --height: 700;">
                        <img src="{{ asset('assets/perpus-smc/images/about-2.jpeg') }}" width="500" height="700" loading="lazy"
                        alt="interior view of a leather shop selling belts brac" class="img-cover">
                    </figure>

                    <div class="about-content">
                        <h3 class="h2 section-title">Sejarah Perpustakaan Smecone</h3>
                        <p class="section-text">Curabitur interdum malesuada lectus ut pharetra. Sed tellus ante, aliquet a sem id, ultricies varius dolor. Nam volutpat hendrerit massa. Crasposuere ornare elementum.</p>
                        <a href="{{ route('about') }}" class="btn">
                            <span class="span">Read More</span>
                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>

                        <figure class="about-banner about-banner-3 img-holder" style="--width: 850; --height: 420;">
                            <img src="{{ asset('assets/perpus-smc/images/about-3.jpeg') }}" width="850" height="420" loading="lazy"
                            alt="concentrated artisans in workshop" class="img-cover">
                        </figure>
                    </div>
                </div>
            </section>


            {{-- visi-misi --}}
            <section class="section testi" aria-label="testimonials" id="visimisi">
                <div class="container">
                    <ul class="grid-list">
                        <li>
                            <div class="testi-card">
                                <p class="client-name">
                                    Visi
                                </p>
                                <p class="card-text">
                                    Etiam ultricies eros ut malesuada condimentum. Cras in nisl sit amet dui molestie tristique ut vitae libero nec laoreet purus.
                                </p>
                                {{-- <p class="client-title">
                                    CEO Of Teshikaaa
                                </p> --}}
                                <img src="{{ asset('assets/perpus-smc/images/quote.svg') }}" width="50" height="50" loading="lazy" alt="quote" class="icon">
                            </div>
                        </li>

                        <li>
                            <div class="testi-card">
                                <p class="client-name">
                                    Misi
                                </p>
                                <p class="card-text">
                                    Etiam ultricies eros ut malesuada condimentum. Cras in nisl sit amet dui molestie tristique ut vitae libero nec laoreet purus.
                                </p>
                                {{-- <p class="client-title">
                                    CEO Of Teshikaaa
                                </p> --}}
                                <img src="{{ asset('assets/perpus-smc/images/quote.svg') }}" width="50" height="50" loading="lazy" alt="quote" class="icon">
                            </div>
                        </li>
                    </ul>
                </div>
            </section>



            {{-- features --}}

            <section class="feature" aria-label="features" id="">
                <div class="feature-banner has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/feature-banner.jpeg') }}')">
                    {{-- <button class="play-btn" aria-label="play video: man making handmade belt">
                        <img src="{{ asset('assets/perpus-smc/images/play.svg') }}" width="60" height="60" loading="lazy" alt="play icon">
                    </button> --}}
                </div>

                <div class="section feature-content">
                    <div class="container">
                        <h2 class="h2 section-title">
                            Passionate About Elegance and Beauty Design
                        </h2>
                        <p class="section-text">
                            Curabitur porttitor nulla vitae purus eleifend feugiat. Quisque faucibus sapien, ut porttitor lorem.
                        </p>

                        <ul class="feature-list">
                            <li>
                                <div class="feature-list-card">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/perpus-smc/images/feature-icon-1.svg') }}" width="45" height="45" loading="lazy" alt="review icon">
                                    </div>
                                    <div>
                                        <h3 class="h4 card-title">Jumlah Siswa</h3>
                                        <p class="card-text">
                                            Vestibulum in eros at lectus commodo
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-list-card">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/perpus-smc/images/feature-icon-2.svg') }}" width="45" height="45" loading="lazy" alt="badge icon">
                                    </div>
                                    <div>
                                        <h3 class="h4 card-title">Pengunjung</h3>
                                        <p class="card-text">
                                            Vestibulum in eros at lectus commodo
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-list-card">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/perpus-smc/images/feature-icon-3.svg') }}" width="45" height="45" loading="lazy" alt="money bag icon">
                                    </div>
                                    <div>
                                        <h3 class="h4 card-title">Jumlah Buku</h3>
                                        <p class="card-text">
                                            Vestibulum in eros at lectus commodo
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <p>
                            Nunc cursus ante libero, et convallis eros tristique nec. Fusce consequat lectus dui, nec laoreet purus venenatis id.
                        </p>
                    </div>
                </div>
            </section>


            {{-- Collection --}}

            <section class="section collection text-center" aria-labelledby="collection-label" id="book">
                <div class="container">

                    <h2 class="h2 section-title" id="collection-label">
                        Unique Handicrafts Collection
                    </h2>

                    <p class="section-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie ligula dignissim.
                    </p>

                    <ul class="grid-list">
                        @foreach ($books as $b)
                        <li>
                            <div class="collection-card">
                                <figure class="card-banner img-holder" style="--width: 500; --height: 550;">
                                    <img src="{{ asset('cover-book/'.$b->cover ) }}" width="500" height="550" loading="lazy"
                                    alt="Gatotkaca" class="img-cover">
                                </figure>
                                <div class="card-content">
                                    <h3 class="h3 card-title">{{ $b->title }}</h3>
                                    <p class="card-text">Cras fermentum augue ac purus pharetra man aliquam fringilla ornare quam.</p>
                                    <a href="{{ route('book',['book'=>$b->slug]) }}" class="btn">
                                        <span class="span">View Book</span>
                                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </section>


            {{-- gallery --}}

            <section class="gallery" id="gallery">
                <ul class="gallery-list">
                    <li>
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/gallery-1.jpeg') }}')">
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    Layanan Sirkulasi
                                </h3>
                                <a href="{{ route('gallery-smecone') }}" class="btn-link">
                                    <span class="span">View Gallery</span>
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/gallery-2.jpeg') }}')">
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    Layanan Pemustaka
                                </h3>
                                <a href="{{ route('gallery-smecone') }}" class="btn-link">
                                    <span class="span">View Gallery</span>
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/gallery-3.jpeg') }}')">
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    BI Corner
                                </h3>
                                <a href="{{ route('gallery-smecone') }}" class="btn-link">
                                    <span class="span">View Gallery</span>
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/gallery-4.jpeg') }}')">
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    Layanan Literasi
                                </h3>
                                <a href="{{ route('gallery-smecone') }}" class="btn-link">
                                    <span class="span">View Gallery</span>
                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>


            {{-- Blog --}}

            <section class="section blog" aria-labelledby="blog-label" id="blog">
                <div class="container">
                    <h2 class="h2 section-title text-center" id="blog-label">
                        Berita Terbaru
                    </h2>
                    <p class="section-text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie ligula dignissim.
                    </p>
                    <ul class="grid-list">
                        @foreach ($article as $a)
                        <li>
                            <div class="blog-card">
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

                        {{-- <li>
                            <div class="blog-card">
                                <figure class="card-banner img-holder" style="--width: 1024; --height: 683;">
                                    <img src="{{ asset('assets/perpus-smc/images/blog-1.jpeg') }}" width="1024" height="683" loading="lazy"
                                     alt="The Detail Process Of Decorating The Clay Vase At Pottery Studio" class="img-cover">
                                </figure>
                                <div class="card-content">
                                    <h3 class="h4">
                                        <a href="{{ route('post') }}" class="card-title">
                                            Latihan Menulis dan Kemampuan dasar Literasi
                                        </a>
                                    </h3>
                                    <div class="card-meta">
                                        <a href="#" class="card-meta-wrapper">
                                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">Admin</span>
                                        </a>

                                        <time class="card-meta-wrapper" datetime="2024-04-18">
                                            <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                                            <span class="span">April 18, 2024</span>
                                        </time>

                                        <a href="#" class="card-meta-wrapper">
                                            <ion-icon name="folder-open-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">Tips & Trick</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="blog-card">
                                <figure class="card-banner img-holder" style="--width: 1024; --height: 683;">
                                    <img src="{{ asset('assets/perpus-smc/images/blog-1.jpeg') }}" width="1024" height="683" loading="lazy"
                                     alt="The Detail Process Of Decorating The Clay Vase At Pottery Studio" class="img-cover">
                                </figure>
                                <div class="card-content">
                                    <h3 class="h4">
                                        <a href="{{ route('post') }}" class="card-title">
                                            Latihan Menulis dan Kemampuan dasar Literasi
                                        </a>
                                    </h3>
                                    <div class="card-meta">
                                        <a href="#" class="card-meta-wrapper">
                                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">Admin</span>
                                        </a>

                                        <time class="card-meta-wrapper" datetime="2024-04-18">
                                            <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                                            <span class="span">April 18, 2024</span>
                                        </time>

                                        <a href="#" class="card-meta-wrapper">
                                            <ion-icon name="folder-open-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">Tips & Trick</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li> --}}

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

    <footer class="footer" id="contactus">
        <div class="container">
            <div class="section footer-top">
                <div class="footer-brand">
                    <a href="#" class="logo">Perpustakaan Smecone</a>
                    <p class="footer-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non porttitor augue, in convallis risus. Sed efficitur nulla quis luctus pulvinar. Cras nec pulvinar condimentum lacus.
                    </p>
                    <ul class="social-list">
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
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
                        <a href="#" class="footer-link">Collection</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Features</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Blog & News</a>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Support</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Account</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Feedback</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Support Center</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Our Stores</a>
                    </li>
                </ul>

                <div class="footer-list">
                    <p class="footer-list-title">Get In Touch</p>
                    <p class="footer-text">
                        Question or feedback?
                        We’d love to hear from you
                    </p>
                    <a href="#" class="btn">
                        <span class="span">Contact Us</span>
                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="copyright">
                    Copyright 2024 Perpustakaan Smecone. All Right Reserved
                </p>
            </div>
        </div>
    </footer>


    {{-- js --}}
    <script src="{{ asset('assets/perpus-smc/js/home/script.js') }}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
