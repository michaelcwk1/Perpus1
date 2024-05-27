<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus Smecone - {{ $book->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/40363c613f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>
<body class="bg-slate-100">
    <div class="w-4/5 mx-auto p-3 bg-white shadow-md">
        <button class="mb-10 w-24 rounded-tl-full rounded-bl-full bg-red-500 text-white w-12"><a href="{{ route('home') }}">Kembali</a></button>
        <div class="flex max-[392px]:flex-col">
            <div class="w-2/5 max-[392px]:w-full">
                <div class="slider2">
                    <img src="{{ asset('cover-book/'.$book->cover) }}" alt="" srcset="">
                    @foreach ($book->images as $image)
                    <img src="{{ asset('image-book/'.$image->file_image) }}" alt="" srcset="">
                    @endforeach
                </div>
            </div>
            <div class="p-3 w-3/5 max-[392px]:w-full">
                <div class="flex flex-col gap-3 mb-8">
                    <p class="text-4xl font-bold max-[392px]:text-2xl">{{ $book->title }}</p>
                    <div class="flex gap-5 max-[392px]:flex-col max-[392px]:gap-2">
                        <p class="text-base">Penerbit : {{ $book->publisher }}</p>
                        <p class="text-base">Tahun Terbit : {{ $book->years }}</p>
                        <p class="text-base">Genre : {{ $book->genre }}</p>
                    </div>
                </div>
                <button class=" bg-teal-600 w-full h-10 rounded-tl-2xl rounded-tr-lg rounded-bl-lg rounded-br-2xl text-white mb-5"><a href="{{ $book->link_book }}">Baca Buku <i class="fa-solid fa-book-open"></i></a></button>
                <p class="pb-3 border-b border-b-slate-200 text-2xl max-[392px]:text-xl font-semibold">Deskripsi</p>
                <p class="text-justify indent-14 p-2 text-base max-[392px]:text-sm max-[392px]:indent-6">{!! $book->description !!}</p>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.slider2').bxSlider({
            slideWidth: 500,
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 10,
            adaptiveHeight: true,
            });
        });
    </script>
</body>
</html>