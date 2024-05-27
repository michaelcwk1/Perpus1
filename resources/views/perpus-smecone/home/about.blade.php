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
        .metamorfosis{
            display: flex;
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
        <p class="post-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur amet nobis esse eveniet. Blanditiis maiores provident corporis fugit ab autem dolorem repellendus voluptate ex, temporibus dolorum recusandae sint aspernatur saepe porro dignissimos vel atque possimus alias consequuntur optio est delectus minima molestiae? Et sed nisi commodi blanditiis eaque, nulla dolores ut. Nam quo dolorem magnam, assumenda in voluptate tempora, repellat hic ullam, veniam doloribus enim expedita aliquid omnis delectus deleniti!</p>
        <p class="post-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur amet nobis esse eveniet. Blanditiis maiores provident corporis fugit ab autem dolorem repellendus voluptate ex, temporibus dolorum recusandae sint aspernatur saepe porro dignissimos vel atque possimus alias consequuntur optio est delectus minima molestiae? Et sed nisi commodi blanditiis eaque, nulla dolores ut. Nam quo dolorem magnam, assumenda in voluptate tempora, repellat hic ullam, veniam doloribus enim expedita aliquid omnis delectus deleniti!</p>
        <p class="post-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur amet nobis esse eveniet. Blanditiis maiores provident corporis fugit ab autem dolorem repellendus voluptate ex, temporibus dolorum recusandae sint aspernatur saepe porro dignissimos vel atque possimus alias consequuntur optio est delectus minima molestiae? Et sed nisi commodi blanditiis eaque, nulla dolores ut. Nam quo dolorem magnam, assumenda in voluptate tempora, repellat hic ullam, veniam doloribus enim expedita aliquid omnis delectus deleniti!</p>
        <div class="metamorfosis">
            <div class="before">
                <h4>before</h4>
                <div class="gallery">
                    <img src="{{ asset('assets/perpus-smc/images/about-1.jpeg') }}" alt="Two hands creating a heart and showing the sun">
                    <img src="https://picsum.photos/id/872/400/400" alt="The mountain">
                    <img src="https://picsum.photos/id/603/400/400" alt="a river">
                    <img src="https://picsum.photos/id/823/400/400" alt="a women with a camera">
                  </div>
            </div>

            <div class="after">
                <h4>after</h4>
                <div class="gallery">
                    <img src="{{ asset('assets/perpus-smc/images/about-1.jpeg') }}" alt="Two hands creating a heart and showing the sun">
                    <img src="https://picsum.photos/id/872/400/400" alt="The mountain">
                    <img src="https://picsum.photos/id/603/400/400" alt="a river">
                    <img src="https://picsum.photos/id/823/400/400" alt="a women with a camera">
                  </div>
            </div>
        </div>
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
