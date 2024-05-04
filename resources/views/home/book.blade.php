<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/perpus-smc/css/book/style.css') }}">
</head>
<body>

    <header>
        <div class="nav container">
            {{-- logo --}}
            <a href="{{ route('home') }}" class="logo">Perpustakaan<span> Smecone</span></a>

            {{-- login --}}
            {{-- <a href="" class="login">Login</a> --}}
        </div>
    </header>

    <section id="prodetails" class="section-p1 container">
        <div class="single-pro-image">
            <img src="{{ asset('assets/perpus-smc/images/buku/timunmas.jpg') }}" alt="" width="100%" id="MainImg">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="{{ asset('assets/perpus-smc/images/timunmas.jpg') }}" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('assets/perpus-smc/images/timunmas.jpg') }}" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('assets/perpus-smc/images/timunmas.jpg') }}" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('assets/perpus-smc/images/timunmas.jpg') }}" alt="" width="100%" class="small-img">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h2>Timun Mas</h2>
            <h4>Buku Cerita Dongeng / <span> Dongeng</span></h4>
            <h4>Deskripsi Cerita</h4>
            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda harum ullam nihil sit repudiandae at, sint sunt impedit! Libero neque, soluta harum odit rerum, possimus iusto sit perspiciatis distinctio alias, consectetur fuga placeat? Numquam eveniet deleniti pariatur explicabo recusandae, quos reprehenderit saepe reiciendis voluptate tempora ut ipsam ab esse assumenda!</span>
        </div>
    </section>


    {{-- script --}}
    <script src="{{ asset('assets/perpus-smc/js/book/script.js') }}"></script>
</body>
</html>
