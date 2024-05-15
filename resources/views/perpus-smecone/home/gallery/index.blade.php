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

    <style>
        * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Raleway;
  background-color: #fff;
}

.heading {
    text-align: center;
    font-size: 2.0em;
    letter-spacing: 1px;
    padding: 40px;
    color: black;
    padding-top: 5rem
}

.gallery-image {
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.gallery-image img {
  height: 250px;
  width: 350px;
  transform: scale(1.0);
  transition: transform 0.4s ease;
}

.img-box {
  box-sizing: content-box;
  margin: 10px;
  height: 250px;
  width: 350px;
  overflow: hidden;
  display: inline-block;
  color: white;
  position: relative;
  background-color: white;
}

.caption {
  position: absolute;
  bottom: 5px;
  left: 20px;
  opacity: 0.0;
  transition: transform 0.3s ease, opacity 0.3s ease;
}

.transparent-box {
  height: 250px;
  width: 350px;
  background-color:rgba(0, 0, 0, 0);
  position: absolute;
  top: 0;
  left: 0;
  transition: background-color 0.3s ease;
}

.img-box:hover img {
  transform: scale(1.1);
}

.img-box:hover .transparent-box {
  background-color:rgba(0, 0, 0, 0.5);
}

.img-box:hover .caption {
  transform: translateY(-20px);
  opacity: 1.0;
}

.img-box:hover {
  cursor: pointer;
}

.caption > p:nth-child(2) {
  font-size: 0.8em;
}

.opacity-low {
  opacity: 0.5;
}

.container-g2 {
        display: flex;
        width: 100%;
        padding: 4% 2%;
        box-sizing: border-box;
        height: 100vh;
}

        .box {
  flex: 1;
  overflow: hidden;
  transition: .5s;
  margin: 0 2%;
  box-shadow: 0 20px 30px rgba(0,0,0,.1);
  line-height: 0;
}

.box > img {
  width: 200%;
  height: calc(100% - 10vh);
  object-fit: cover;
  transition: .5s;
}

.box > span {
  font-size: 3.8vh;
  display: block;
  text-align: center;
  height: 10vh;
  line-height: 2.6;
}

.box:hover { flex: 1 1 50%; }
.box:hover > img {
  width: 100%;
  height: 100%;
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
            <h1 class="header-title">Gallery Perpustakaan Smecone</h1>
            {{-- <img src="{{ asset('assets/perpus-smc/images/home-images/bicorner-landscape.jpeg') }}" alt="" class="header-img"> --}}
        </div>
    </section>

    <p class="heading">Prestasi</p>
    <div class="container-g2">
        <div class="box">
          <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-prestasi/penghargaan.jpeg') }}">
          {{-- <span>BICORNER</span> --}}
        </div>
        <div class="box">
          <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-prestasi/piala.jpeg') }}">
          {{-- <span>Book</span> --}}
        </div>
        <div class="box">
          <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-prestasi/sertifikat1.jpeg') }}">
          {{-- <span>Sertificate</span> --}}
        </div>
        <div class="box">
          <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-prestasi/sertifikat2.jpeg') }}">
          {{-- <span>Edukasi</span> --}}
        </div>
      </div>

    <p class="heading">Gallery BI CORNER</p>
    <div class="gallery-image">
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner1.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Library</p>
                <p class="opacity-low">Architect Design</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner2.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Night Sky</p>
                <p class="opacity-low">Cinematic</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner3.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Tea Talk</p>
                <p class="opacity-low">Composite</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner4.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Road</p>
                <p class="opacity-low">Landscape</p>
                </div>
            </div>
        </div>
    </div>

    <p class="heading">Gallery Layanan Sirkulasi</p>
    <div class="gallery-image">
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner1.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Library</p>
                <p class="opacity-low">Architect Design</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner2.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Night Sky</p>
                <p class="opacity-low">Cinematic</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner3.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Tea Talk</p>
                <p class="opacity-low">Composite</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner4.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Road</p>
                <p class="opacity-low">Landscape</p>
                </div>
            </div>
        </div>
    </div>

    <p class="heading">Gallery Layanan Literasi</p>
    <div class="gallery-image">
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner1.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Library</p>
                <p class="opacity-low">Architect Design</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner2.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Night Sky</p>
                <p class="opacity-low">Cinematic</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner3.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Tea Talk</p>
                <p class="opacity-low">Composite</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner4.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Road</p>
                <p class="opacity-low">Landscape</p>
                </div>
            </div>
        </div>
    </div>

    <p class="heading">Gallery Layanan Pemustaka</p>
    <div class="gallery-image">
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner1.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Library</p>
                <p class="opacity-low">Architect Design</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner2.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Night Sky</p>
                <p class="opacity-low">Cinematic</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner3.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Tea Talk</p>
                <p class="opacity-low">Composite</p>
                </div>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/perpus-smc/images/home-images/gallery-bicorner/bi-corner4.jpeg') }}" alt="" />
            <div class="transparent-box">
                <div class="caption">
                <p>Road</p>
                <p class="opacity-low">Landscape</p>
                </div>
            </div>
        </div>
    </div>

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
