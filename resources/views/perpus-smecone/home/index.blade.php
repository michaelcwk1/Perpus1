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

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
            <a href="{{ route('home') }}" class="logo">Perpustakaan Smecone</a>

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
                        <a href="#bicorner" class="navbar-link">BI Corner</a>
                    </li>
                    <li>
                        <a href="#book" class="navbar-link">Buku</a>
                    </li>
                    <li>
                        <a href="#gallery" class="navbar-link">Galeri</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="navbar-link">Blog</a>
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
                        @endguest
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

                    <div class="hero-content" data-aos="fade-up-right" data-aos-duration="2000">
                        <h1 class="h2 hero-title">Perpustakaan Smecone <span class="span">SMK N 1 Purwokerto</span></h1>
                        <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <a href="#aboutus" class="btn">
                            <span class="span">See More</span>
                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>
                    </div>

                    <div class="wrapper" data-aos="fade-up" data-aos-duration="2000">
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
                        <figure class="about-banner about-banner-1 img-holder" data-aos="fade-down-right" data-aos-duration="2000" style="--width: 600; --height: 480;">
                            <img src="{{ asset('assets/perpus-smc/images/about-1.jpeg') }}" width="600" height="480" loading="lazy"
                            alt="craftman in workshop" class="img-cover">
                        </figure>
                        <h2 class="h2 section-title" data-aos="zoom-in-right" data-aos-duration="2000">Perpustakaan ini berdiri sejak 1963</h2>
                    </div>

                    <figure class="about-banner about-banner-2 img-holder" data-aos="fade-down" data-aos-duration="2000" style="--width: 500; --height: 700;">
                        <img src="{{ asset('assets/perpus-smc/images/about-2.jpeg') }}" width="500" height="700" loading="lazy"
                        alt="interior view of a leather shop selling belts brac" class="img-cover">
                    </figure>

                    <div class="about-content" data-aos="zoom-in-left" data-aos-duration="2000">
                        <h3 class="h2 section-title">Sejarah Perpustakaan Smecone</h3>
                        <p class="section-text">Perpustakaan sekolah yang berada di SMK N 1 Purwokerto sejak tahun 1963 di beri nama "Perpustakaan SMK N 1 Purwokerto". Perpustakaan yang didirikan bersamaan dengan SMK N 1 Purwokerto pada tahun 1963</p>
                        <a href="{{ route('about') }}" class="btn">
                            <span class="span">Read More</span>
                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>

                        <figure class="about-banner about-banner-3 img-holder" data-aos="fade-up-left" data-aos-duration="2000" style="--width: 850; --height: 420;">
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
                            <div class="testi-card" data-aos="flip-left" data-aos-duration="2000">
                                <p class="client-name">
                                    Visi
                                </p>
                                <p class="card-text">
                                    Melayani dengan hati menuju perpustakaan digital.
                                </p>
                                {{-- <p class="client-title">
                                    CEO Of Teshikaaa
                                </p> --}}
                                <img src="{{ asset('assets/perpus-smc/images/quote.svg') }}" width="50" height="50" loading="lazy" alt="quote" class="icon">
                            </div>
                        </li>

                        <li>
                            <div class="testi-card" data-aos="flip-right" data-aos-duration="2000">
                                <p class="client-name">
                                    Misi
                                </p>
                                <p class="card-text">
                                    a.Menyediakan bahan informasi sesuai dengan kebutuhan dan potensi siswa; <br>
                                    b.Meningkatkan minat baca siswa, guru, dan karyawan; <br>
                                    c. Memberikan layanan perpustakaan yang tepat dan prima; <br>
                                    d. Menciptakan perpustakaan digital.
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

            <section class="feature" aria-label="features" id="bicorner">
                <div class="feature-banner has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/about-2.jpeg') }}')">
                    {{-- <button class="play-btn" aria-label="play video: man making handmade belt">
                        <img src="{{ asset('assets/perpus-smc/images/play.svg') }}" width="60" height="60" loading="lazy" alt="play icon">
                    </button> --}}
                </div>

                <div class="section feature-content">
                    <div class="container">
                        <h2 class="h2 section-title" style="color: white">
                            BI CORNER
                        </h2>
                        <p class="section-text">
                            BI Corner adalah sebuah sudut khusus yang didirikan di perpustakaan-perpustakaan, baik di lingkungan perguruan tinggi, sekolah, maupun perpustakaan umum, yang berisi koleksi literatur terkait ekonomi, keuangan, dan peran Bank Indonesia. Sudut ini dirancang untuk menjadi pusat informasi dan pembelajaran yang mudah diakses oleh masyarakat luas, termasuk pelajar, mahasiswa, dan akademisi. Di BI corner juga tersedia koleksi perpustakaan yang secara khusus menyediakan koleksi mengenai ekonomi dan perbankan yang dapat dipakai sebagai refrensi dalam proses belajar dan mengajar.
                        </p>
                        <h3 class="section-title" style="color: white">
                            Tujuan
                        </h3>
                        <p class="section-text" style="font-weight: bold;">
                            1. Meningkatkan Literasi Keuangan : <br> <span style="font-weight: normal">BI Corner bertujuan untuk meningkatkan pemahaman masyarakat tentang keuangan dan ekonomi.</span> <br>
                            2. Penyebaran Informasi : <br> <span style="font-weight: normal">Melalui BI Corner, informasi tentang kebijakan dan program-program Bank Indonesia dapat disebarluaskan secara lebih efektif.</span> <br>
                            3. Mendorong Riset dan Inovasi : <br> <span style="font-weight: normal">Fasilitas ini juga mendukung penelitian dan inovasi di bidang ekonomi dan keuangan. Mahasiswa dan peneliti dapat memanfaatkan BI Corner untuk mengakses sumber-sumber informasi yang berkualitas dan relevan untuk kegiatan akademis mereka.</span><br>
                            4. Pengembangan SDM : <span style="font-weight: normal">BI Corner berfungsi sebagai sarana pengembangan sumber daya manusia yang berkualitas di bidang ekonomi dan keuangan.</span>
                        </p>
                    </div>
                </div>
            </section>


            {{-- Collection --}}

            <section class="section collection text-center" aria-labelledby="collection-label" id="book">
                <div class="container">
                        <h2 class="h2 section-title" id="collection-label">
                            Koleksi Buku
                        </h2>

                        <p class="section-text">
                            Koleksi Buku novel Perpustakaan SMK Negeri 1 Purwokerto
                        </p>

                    <ul class="grid-list">
                        @foreach ($books as $b)
                        <li>
                            <div class="collection-card" data-aos="fade-up" data-aos-duration="3000">
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
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/gallery-1.jpeg') }}')" data-aos="flip-right" data-aos-duration="2000">
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
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/gallery-2.jpeg') }}')" data-aos="flip-right" data-aos-duration="2000">
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
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/gallery-3.jpeg') }}')" data-aos="flip-right" data-aos-duration="2000">
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
                        <div class="gallery-card has-bg-image has-after" style="background-image: url('{{ asset('assets/perpus-smc/images/gallery-4.jpeg') }}')" data-aos="flip-right" data-aos-duration="2000">
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
                        Ikuti berita-berita terbaru dari Perpustakaan SMK Negeri 1 Purwokerto
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

    <footer class="footer" id="footer">
        <div class="container">
            <div class="section footer-top">
                <div class="footer-brand">
                    <a href="#" class="logo">Perpustakaan Smecone</a>
                    <p class="footer-text">
                        Perpustakaan Smecone adalah pusat informasi dan pembelajaran yang mendukung di era Digital. Dengan Menyediakan berbagai layanan dan sumber daya yang dirancang untuk meningkatkan pengetahuan dan keterampilan.
                    </p>
                    <ul class="social-list">
                        <li>
                            <a href="#" class="social-link">
                                @ perpussmkn1pwt@gmail.com
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon> libs_smecone
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
                        <a href="#" class="footer-link">SMK Negeri 1 Purwokerto</a>
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
                    Copyright 2024 Perpustakaan Smecone. All Right Reserved
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
