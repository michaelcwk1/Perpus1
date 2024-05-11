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

    {{-- post content --}}
    <section class="post-header">
        <div class="header-content post-container">
            <a href="{{ route('blog') }}" class="back-home">Back To Blog</a>
            <h1 class="header-title">{{ $article->title }}</h1>
            <img src="{{ asset('cover-image/'.$article->image_header) }}" alt="" class="header-img">
        </div>
    </section>

    {{-- post --}}
    <section class="post-content post-container">
        <h2 class="sub-heading">{{ $article->title }}</h2>
        <div class="post-text">
            {!! $article->naration !!}
        </div>
    </section>

    {{-- comment --}}
    <section class="contact container" id="contact">
        <h2 class="heading">Coment</h2>

        <form action="#" class="form-comment">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" placeholder="Email Subject">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
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
