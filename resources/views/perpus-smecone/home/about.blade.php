<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sejarah Perpustakaan Smecone</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/blog/style.css') }}">

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
            <a href="#" class="logo">Perpustakaan<span> Smecone</span></a>

            {{-- login --}}
            {{-- <a href="" class="login">Login</a> --}}
        </div>
    </header>

    {{-- post content --}}
    <section class="post-header">
        <div class="header-content post-container">
            <a href="{{ route('home') }}" class="back-home">Back To Home</a>
            <h1 class="header-title">Perpustakaan SMK N 1 Purwokerto</h1>
            <img src="{{ asset('assets/perpus-smc/images/about-3.jpeg') }}" alt="" class="header-img">
        </div>
    </section>

    {{-- post --}}
    <section class="post-content post-container">
        <h2 class="sub-heading">Sejarah Perpustakaan Smecone</h2>
        <p class="post-text">Perpustakaan sekolah yang berada di SMK Negeri 1 Purwokerto sejak tahun 1963 di beri nama "Perpustakaan SMK Negeri 1 Purwokerto". Perpustakaan yang didirikan bersamaan dengan SMK Negeri 1 Purwokerto pada tahun 1963 tersebut, disahkan dengan SK Pendirian perpustakaan yang ditandatangani oleh kepala sekolah.</p>
        <p class="post-text">Perpustakaan sekolah merupakan salah satu jenis perpustakaan yang berada dibawah naungan sebuah institusi pendidikan sebagai salah satu fasilitas dan sarana penunjang pendidikan. Perpustakaan sekolah mempunyai tugas pokok membantu proses belajar mengajar siswa dan guru dengan menyediakan bahan-bahan pustaka yang sesuai dengan kurikulum. Sehingga proses belajar mengajar di sekolah dapat berjalan dengan baik. Jika perpustakaan dikelola dengan baik, maka akan memberikan manfaat yang besar untuk kelancaran dan keberhasilan proses belajar mengajar di sekolah.</p>
        <p class="post-text">Perpustakaan sebagai jantung sekolah dan pusat pembelajaran yang strategis untuk merealisasikan visi dan misi sekolah. Seluruh warga sekolah mulai sadar untuk membantu mengembangkan perpustakaan yang menjadi sarang ilmunya. Bentuk bantuan pun ada beragam. Dari tenaga, waktu, perhatian, serta penggunaan dan pemanfaatan semua fasilitas perpustakaan dengan cara yang baik dan benar.</p>
        <p class="post-text">Sudah bukan jamannya perpustakaan sebagai gudang buku, tempat pembuangan karyawan bermasalah dan tempat yang gelap, pengap, gaduh dan kotor. Perpustakaan harus di huni oleh tenaga yang profesional memiliki kualitas, inisiatif, dan memiliki dedikasi/kecintaan terhadap pekerjaannya sebagai pustakawan. Bahkan di negara-negara maju, pustakawan dan arsiparis dijadikan sebagai tim penting dalam pembangunan pendidikan, ekonomi, politik dan kebudayaan bangsa.</p>
        <p class="post-text">Perpustakaan memiliki ruangan yang strategis, nyaman, dan sebagai tempat rekreasi dengan adanya fasilitas-fasilitas yang memadai, diantaranya adalah BI Corner, ruang Audio Visual, dan Teras Baca.</p>
        <p class="post-text">Bersumber dari pemikiran diatas, maka Perpustakaan SMK Negeri 1 Purwokerto selalu berupaya melakukan trobosan yang sejalan dengan visi misi sekolah. Berbagai program dan trobosan yang direncanakan, diharapkan dapat lebih memaksimalkan perpustakaan sebagai The Center of Knowledge (Pusat Pengetahuan)</p>
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem; text-align: center;">TUJUAN</h3>
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem">A. Tujuan Umum</h3> <br>
        <p class="">Tujuan umum perpustakaan adalah membina dan mengembangkan kebiasaan membaca dan belajar sebagai suatu proses yang berkesinambungan di lingkungan sekolah. Menjadi perpustakaan sekolah yang berbasis ICT.</p>
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem">B. Tujuan Khusus</h3> <br>
        <p class="">a. Memberikan layanan informasi yang memuaskan bagi masyarakat sekolah, <br>
            b. Menunjang pencapaian visi dan misi badan/ organisasi/ instansi induknya, <br>
            c. Mengembangkan minat, kemampuan dan kebiasaan pembaca khususnya serta mendayagunakan budaya membaca dan menulis dalam berbagai sektor kehidupan, <br>
            d. Mendidik siswa agar memelihara dan memanfaatkan bahan pustaka secara tepat guna dan berhasil guna, <br>
            e. Meletakkan proses pembelajaran mandiri, f. Memupuk dan mengembangkan minat dan bakat siswa, <br>
            g. Menumbuhkan penghargaan siswa terhadap pengalaman imajinatif</p>
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem; text-align: center;">VISI, MISI, DAN MOTTO PERPUSTAKAAN</h3>
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">A. VISI</h3>
        <p class="">Melayani dengan hati menuju perpustakaan digital.</p>
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">B. MISI</h3>
        <p class="post-text">a. Menyediakan bahan informasi nsesuai dengan kebutuhan dan potensi siswa; <br>
            b. Meningkatkan minat baca siswa, guru, dan karyawan; <br>
            c. Memberikan layanan perpustakaan yang tepat dan prima; <br>
            d. Menciptakan perpustakaan digital.</p>
        <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">C. MOTTO</h3>
        <p class="post-text">Melayani dengan hati menuju perpustakaan digital.</p> <br>
        <p class="post-text">Pustaka SMK Negeri 1 Purwokerto dari waktu ke waktu, akan selalu mengalami evolusi dari segi fisik, koleksi, fasilitas, dan kreatifitas program-program kegiatannya. Harapan setiap civitas akademik pada umumnya dan para pengelola pustaka SMK NEGERI 1 Purwokerto pada khususnya, perpustakaan ini akan berevolusi, bahkan berevolusi menjadi taman ilmu dan informasi yang nyaman untuk memenuhi kebutuhan informasi akademik/ non akademik bagi warga sekolah. <br>
            Maka melalui Pustaka SMK Negeri 1 Purwokerto kami ingin menumbuhkan kecintaan civitas akademik untuk menumbuhkan minat baca dan menulis. Salam Literasi !</p> <br>
            <div class="metamorfosis">
                <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 1rem; margin-bottom: 2rem; text-align: center;">Kondisi ruang Perpustakaan Smecone pada tahun ke tahun</h3>
                <div class="before">
                    <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">1. Kondisi Tahun 2016 sampai 2018</h3>
                <div class="gallery">
                    <img src="{{ asset('assets/perpus-smc/images/metamorfosis/before/b5.JPG') }}" alt="Two hands creating a heart and showing the sun">
                    <img src="{{ asset('assets/perpus-smc/images/metamorfosis/before/b1.JPG') }}" alt="The mountain">
                    <img src="{{ asset('assets/perpus-smc/images/metamorfosis/before/b2.JPG') }}" alt="a river">
                    <img src="{{ asset('assets/perpus-smc/images/metamorfosis/before/b7.JPG') }}" alt="a women with a camera">
                  </div>
            </div>

            <div class="midle">
                <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">2. Kondisi Tahun 2019 peresmian BI Corner</h3>
                <div class="gallery">
                    <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner5.jpeg') }}" alt="Two hands creating a heart and showing the sun">
                    <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner1.jpeg') }}" alt="The mountain">
                    <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner6.jpeg') }}" alt="a river">
                    <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner3.jpeg') }}" alt="a women with a camera">
                  </div>
            </div>

            <div class="after">
                <h3 class="post-text" style="font-weight: bold; font-size: 1.5rem; margin-top: 3rem;">3. Kondisi Tahun 2023 sampai sekarang</h3>
                <div class="gallery">
                    <img src="{{ asset('assets/perpus-smc/images/metamorfosis/after/a3.jpeg') }}" alt="Two hands creating a heart and showing the sun">
                    <img src="{{ asset('assets/perpus-smc/images/metamorfosis/after/a1.jpeg') }}" alt="The mountain">
                    <img src="{{ asset('assets/perpus-smc/images/metamorfosis/after/a2.jpeg') }}" alt="a river">
                    <img src="{{ asset('assets/perpus-smc/images/metamorfosis/after/a4.jpeg') }}" alt="a women with a camera">
                  </div>
            </div>
        </div>
    </section>


    {{-- footer --}}
    <div class="footer container">
        <p>&#169; Perpustakaan Smecone All Right Reserved</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/perpus-smc/js/blog/script.js') }}"></script>
</body>
</html>
