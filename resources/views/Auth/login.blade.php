<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Smecone - Masuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-row">
        <div class="max-[1024px]:w-full w-3/5 h-screen">
            <div class="flex flex-row items-center gap-3 justify-center mt-32">
                <img src="{{ asset('asset/assets/images/smc.png') }}" alt="" width="72">
                <h2 class="text-xl">Perpustakaan SMK Negeri 1 Purwokerto</h2>
            </div>
            <div class="p-3 mt-10">
                <p class="text-center text-lg mb-6">Masuk ke Perpustakaan</p>
                <form action="{{ route('check-login') }}" method="post">
                    @csrf
                    <input class="border-b border-b-2 border-b-slate-300 rounded-sm outline-none w-3/5 p-2 mx-auto block mb-4" type="email" name="email" placeholder="Masukkan email kamu">
                    <input class="border-b border-b-2 border-b-slate-300 rounded-sm outline-none w-3/5 p-2 mx-auto block" type="password" name="password" placeholder="Masukkan password kamu">
                    <button type="submit" class="block mx-auto bg-red-500 mt-4 p-1 rounded text-white px-3">Masuk</button>
                </form>
                <p class="text-center text-sm mt-12">Tidak mempunyai akun ? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar disini</a></p>
            </div>
        </div>
        <div class="max-[1024px]:hidden w-2/5 bg-slate-400 h-screen">
            <img src="{{ asset('asset/assets/images/hero-banner-2.jpeg') }}" alt="" srcset="">
        </div>
    </div>
</body>
</html>