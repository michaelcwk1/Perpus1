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
            <img src="{{ asset('cover-book/'.$book->cover) }}" alt="" width="100%" id="MainImg">

            <div class="small-img-group">
                @foreach ($book->images as $b)
                <div class="small-img-col">
                    <img src="{{ asset('image-book/'.$b->file_image) }}" alt="" width="100%" class="small-img">
                </div>
                @endforeach
            </div>
        </div>

        <div class="single-pro-details">
            <h2>{{ $book->title }}</h2>
            <h4>{{ $book->genre }} / <span> {{ $book->genre }}</span></h4>
            <h4>Deskripsi Cerita</h4>
            <span>{!! $book->description !!}</span>
        </div>
    </section>


    {{-- script --}}
    <script src="{{ asset('assets/perpus-smc/js/book/script.js') }}"></script>
</body>
</html>
