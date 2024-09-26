<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Smecone - Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-6 w-96">
        <div class="flex flex-row items-center justify-center mb-6">
            <img src="{{ asset('assets/perpus-smc/images/logo.png') }}" alt="Logo" width="72">
        </div>
        <p class="text-center text-xl font-medium mb-6">Masuk ke Perpustakaan</p>
        <form action="{{ route('check-login') }}" method="post">
            @csrf
            <input class="border-b   border-slate-300 rounded-sm outline-none w-full p-2 mb-4 text-lg" type="email" name="email" placeholder="Masukkan email kamu" required>
            <input class="border-b   border-slate-300 rounded-sm outline-none w-full p-2 mb-4 text-lg" type="password" name="password" placeholder="Masukkan password kamu" required>
            <button type="submit" class="w-full bg-gray-600  mt-4 p-2 rounded text-white text-lg font-semibold transition duration-200 hover:bg-indigo-900">Masuk</button>
        </form>
        <p class="text-center text-sm mt-6">Tidak mempunyai akun? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar disini</a></p>
    </div>
</body>
</html>
