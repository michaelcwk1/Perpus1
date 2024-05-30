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
        <div style="margin-top: 3rem">
            <h3 style="margin-bottom: 2rem">Komentar</h3>
            @forelse ( $article->comments as $comment )
            <div style="display: flex; flex-direction: column; gap:0.2rem; margin-bottom: 1rem; border: 1px solid black; border-radius: 5px; padding: 5px">
                <span style="font-weight: bold;">{{ $comment->name }}</span>
                <span style="font-size: 12px; padding-bottom: 3px">{{ $comment->created_at->diffForHumans() }}</span>
                <p style="">{{ $comment->comment }}</p>
            </div>
            @empty
            <i>Tidak ada komentar</i>
            @endforelse
        </div>
    </section>

    {{-- comment --}}
    <section class="contact container" id="contact">
        <h2 class="heading">Coment</h2>

        <form action="{{ route('comment', ['id'=>$article->id]) }}" class="form-comment" method="POST">
            @csrf
            @guest
            <div class="input-box">
                <input type="text" name="name" placeholder="Full Name">
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email Subject">
            </div>
                @endguest
            @auth
            <div class="input-box">
                <input type="text" name="name" placeholder="Full Name" hidden value="{{ Auth::user()->name }}">
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email Subject" hidden value="{{ Auth::user()->email }}">
            </div>
            @endauth
            <textarea name="comment" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    {{-- footer --}}
    <div class="footer container">
        <p>&#169; Perpustakaan Smecone All Right Reserved</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/perpus-smc/js/blog/script.js') }}"></script>
</body>
</html>
