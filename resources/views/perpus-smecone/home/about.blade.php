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

    <style>
        .metamorfosis{
            /* display: flex; */
            justify-content: center;
            align-items: center;
            gap: 3px;
        }
        @media only screen and (max-width: 600px) {
            .metamorfosis{
            flex-direction: column;
        }
        }
        .before .after{
            display: flex;
            flex-direction: column;
        }

        .before h4{
            text-align: center;
        }

        .after h4{
            text-align: center;
        }

        .gallery {
        --g: 6px; /* the gap */

        display: grid;
        width: 100%; /* the size */
        aspect-ratio: 1;
        grid: auto-flow 1fr/repeat(3,1fr);
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
        clip-path: polygon(0 0,100% 0,100% 100%,calc(50% + var(--g)/4) 100%,0 calc(50% - var(--g)/4))
        }
        .gallery img:nth-child(3) {
        grid-area: 2/1/span 2/span 2;
        clip-path: polygon(0 0,calc(50% - var(--g)/4) 0,100% calc(50% + var(--g)/4),100% 100%,0 100%);
        }
    </style>
</head>
<body>

    {{-- header --}}

    <header>
        <div class="nav container">
            {{-- logo --}}
            <div class="logo-container" style="display: flex; align-items: center;">
                <img src="{{ asset('assets/perpus-smc/images/logo.png') }}" alt="" style="width: 50px; height: auto; margin-right: 10px;">
                <a href="{{ route('home') }}" class="logo">UHW<span> Perpus</span></a>
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
        <p class="post-text">Perpustakaan kampus yang berada di Universitas Hayam Wuruk Perbanas sejak tahun 1963, dikenal sebagai "UHW Perpustakaan". Perpustakaan ini didirikan bersamaan dengan Universitas Hayam Wuruk Perbanas dan diresmikan dengan SK Pendirian perpustakaan yang ditandatangani oleh pimpinan universitas.</p>
        <p class="post-text">Sebagai salah satu fasilitas penting di lingkungan pendidikan tinggi, perpustakaan memiliki peran vital dalam mendukung proses belajar mengajar. UHW Perpustakaan menyediakan berbagai sumber informasi yang sesuai dengan kebutuhan akademik mahasiswa dan dosen, sehingga dapat mendukung keberhasilan proses belajar mengajar.</p>
        <p class="post-text">Perpustakaan berfungsi sebagai pusat pembelajaran yang strategis untuk merealisasikan visi dan misi universitas. Semua civitas akademika berperan aktif dalam mengembangkan perpustakaan sebagai sumber ilmu pengetahuan. Dukungan berupa tenaga, waktu, dan pemanfaatan fasilitas perpustakaan sangat penting dalam mencapai tujuan ini.</p>
        <p class="post-text">Perpustakaan tidak lagi dianggap sebagai gudang buku yang tidak terawat. Sebaliknya, UHW Perpustakaan dikelola oleh tenaga profesional yang memiliki dedikasi tinggi dan kecintaan terhadap dunia perpustakaan. Di banyak negara maju, pustakawan menjadi bagian penting dalam pembangunan pendidikan dan budaya bangsa.</p>
        <p class="post-text">Perpustakaan UHW dilengkapi dengan ruang yang nyaman dan fasilitas yang memadai, seperti BI Corner, ruang Audio Visual, dan Teras Baca, yang mendukung kegiatan akademik dan rekreasi bagi pengguna.</p>
        <p class="post-text">Berdasarkan pemikiran tersebut, UHW Perpustakaan selalu berusaha berinovasi sesuai dengan visi dan misi universitas. Berbagai program dan inisiatif diharapkan dapat memaksimalkan peran perpustakaan sebagai The Center of Knowledge (Pusat Pengetahuan).</p>
    
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem; text-align: center;">TUJUAN</h3>
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">A. Tujuan Umum</h3>
        <p class="post-text">Tujuan umum perpustakaan adalah membina dan mengembangkan kebiasaan membaca dan belajar sebagai suatu proses yang berkesinambungan di lingkungan kampus. Menjadi perpustakaan yang berbasis ICT.</p>
        
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">B. Tujuan Khusus</h3>
        <p class="post-text">a. Memberikan layanan informasi yang memuaskan bagi seluruh civitas akademika, <br>
            b. Menunjang pencapaian visi dan misi universitas, <br>
            c. Mengembangkan minat, kemampuan, dan kebiasaan membaca<br>
            d. Mendidik mahasiswa agar memanfaatkan bahan pustaka secara tepat dan efisien, <br>
            e. Memfasilitasi proses pembelajaran mandiri, <br>
            f. Memupuk dan mengembangkan minat dan bakat mahasiswa, <br>
            g. Menumbuhkan penghargaan terhadap pengalaman imajinatif.</p>
    
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem; text-align: center;">VISI, MISI, DAN MOTTO PERPUSTAKAAN</h3>
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">A. VISI</h3>
        <p class="">Melayani dengan hati menuju perpustakaan digital.</p>
        
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">B. MISI</h3>
        <p class="post-text">a. Menyediakan bahan informasi sesuai dengan kebutuhan dan potensi mahasiswa; <br>
            b. Meningkatkan minat baca mahasiswa, dosen, dan staf; <br>
            c. Memberikan layanan perpustakaan yang tepat dan berkualitas; <br>
            d. Menciptakan perpustakaan digital yang inovatif.</p>
        
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">C. MOTTO</h3>
        <p class="post-text">Melayani dengan hati menuju perpustakaan digital.</p>
    
        <p class="post-text">UHW Perpustakaan terus beradaptasi dan berinovasi dari waktu ke waktu, baik dari segi fisik, koleksi, fasilitas, maupun program kegiatan. Harapan dari setiap civitas akademika dan pengelola perpustakaan adalah agar perpustakaan ini menjadi taman ilmu dan informasi yang nyaman untuk memenuhi kebutuhan informasi akademik dan non-akademik. <br>
            Melalui UHW Perpustakaan, kami berkomitmen untuk menumbuhkan kecintaan civitas akademika terhadap literasi dan pengembangan minat baca dan menulis. Salam Literasi!</p> <br>
            <div class="metamorfosis">
                <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 1rem; margin-bottom: 2rem; text-align: center;">Kondisi ruang Perpustakaan UHW pada tahun ke tahun</h3>
                <div class="before">
                    <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">1. Kondisi Tahun 2016 sampai 2018</h3>
                <div class="gallery">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                  </div>
            </div>

            <div class="midle">
                <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">2. Kondisi Tahun 2019 sampai 2022</h3>
                <div class="gallery">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                    <img src="{{ asset('assets/perpus-smc/images/1.png') }}">
                  </div>
            </div>

            <div class="after">
                <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">3. Kondisi Tahun 2023 sampai Sekarang</h3>
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
    <div class="footer container">
        <p>&#169; UHW Perpus All Right Reserved</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/perpus-smc/js/blog/script.js') }}"></script>
</body>
</html>
