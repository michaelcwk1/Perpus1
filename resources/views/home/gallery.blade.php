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
        html, body { padding: 0; margin: 0; }
.image-grid div {
  width: 25%;
  height: 240px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}

.image-grid {
  display: flex;
  flex-wrap: wrap;
  margin-top: 3rem
}

.image01 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-01.jpg'); }
.image02 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-02.jpg'); }
.image03 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-03.jpg'); }
.image04 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-04.jpg'); }
.image05 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-05.jpg'); }
.image06 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-06.jpg'); }
.image07 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-07.jpg'); }
.image08 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-08.jpg'); }
.image09 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-09.jpg'); }
.image10 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-10.jpg'); }
.image11 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-11.jpg'); }
.image12 { background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/409269/food-drink-12.jpg'); }

@media screen and (max-width: 400px) {
  .image-grid {
    flex-direction: column;
    flex-wrap: no-wrap;
  }
  .image-grid div { width: 100%; }
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
            {{-- <img src="{{ asset('assets/perpus-smc/images/about-3.jpeg') }}" alt="" class="header-img"> --}}
        </div>
    </section>


    <div class="image-grid container">
        <div class="image01"></div>
        <div class="image02"></div>
        <div class="image03"></div>
        <div class="image04"></div>
        <div class="image05"></div>
        <div class="image06"></div>
        <div class="image07"></div>
        <div class="image08"></div>
        <div class="image09"></div>
        <div class="image10"></div>
        <div class="image11"></div>
        <div class="image12"></div>
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
