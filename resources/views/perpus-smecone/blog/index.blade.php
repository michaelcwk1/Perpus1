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

    {{-- home --}}
    <section class="home" id="home">
        <div class="home-text container">
            <a href="{{ route('home') }}" class="back-home">Back To Home</a>
            <h2 class="home-title">Perpustakaan Smecone Blog</h2>
            <span class="home-subtitle">Berita dan kegiatan Perpustakaan Smecone</span>
        </div>
    </section>

    {{-- post filter --}}
    <div class="post-filter container">
        <span class="filter-item active-filter" data-filter='all'>All</span>
        @foreach ($category as $c)
        <span class="filter-item" data-filter='{{ $c->name }}'>{{ $c->name }}</span>
        @endforeach
    </div>

    {{-- post --}}
    <section class="post container">
        @foreach ($article as $a)
        <div class="post-box {{ $a->categories->name }}">
            <img src="{{ asset('cover-image/'.$a->image_header) }}" alt="" class="post-img">
            <h2 class="category">{{ $a->categories->name }}</h2>
            <a href="{{ route('post', ['article'=>$a->slug]) }}" class="post-title">{{ $a->title }}</a>
            <span class="post-date">{{ $a->created_at->diffForHumans() }}</span>
            <p class="post-description">{!! $a->getPreviewText(2) !!}</p>
            <div class="profile">
                @if($a->users->avatar !== null)
                <img src="{{ asset('avatar/'.$a->users->avatar) }}" alt="" class="profile-img">
                @else
                <img src="{{ asset('assets/perpus-smc/images/profil-dummy.jpg') }}" alt="" class="profile-img">
                @endif
                <span class="profile-name">{{ $a->users->name }}</span>
            </div>
        </div>
        @endforeach
    </section>

    {{-- footer --}}
    <div class="footer container">
        <p>&#169; Perpustakaan Smecone All Right Reserved</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/perpus-smc/js/blog/script.js') }}"></script>
</body>
</html>
