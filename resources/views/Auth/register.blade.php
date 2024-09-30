<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Smecone - Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-6 w-96">
        <div class="flex flex-row items-center justify-center mb-6">
            <img src="{{ asset('assets/perpus-smc/images/logo.png') }}" alt="Logo" width="72">
        </div>
        <p class="text-center text-lg mb-6">Daftar ke Perpustakaan</p>
        <form action="{{ route('create-user') }}" method="post">
            @csrf
            <input class="border-b   border-slate-300 rounded-sm outline-none w-full p-2 mb-4" type="text" name="name" placeholder="Buat username kamu" required>
            <input class="border-b   border-slate-300 rounded-sm outline-none w-full p-2 mb-4" type="email" name="email" placeholder="Buat email kamu" required>
            
            <div class="flex flex-col mb-4">
                <input id="inputPass" class="border-b   border-slate-300 rounded-sm outline-none p-2" type="password" name="password" placeholder="Buat password kamu" required>
                <div class="flex items-center mt-2">
                    <input type="checkbox" id="lookPass">
                    <label for="lookPass" class="ml-2 text-sm">Lihat kata sandi</label>
                </div>
            </div>
            <button type="submit" class="w-full bg-gray-600  mt-4 p-2 rounded text-white text-lg font-semibold transition duration-200 hover:bg-indigo-900">Daftar</button>
        </form>
        <p class="text-center text-sm mt-6">Sudah mempunyai akun? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Masuk disini</a></p>
    </div>

    <script>
        var cekCheckbox = document.getElementById("lookPass");
        var showPassInput = document.getElementById("inputPass");

        cekCheckbox.addEventListener('change', function() {
            showPassInput.setAttribute("type", cekCheckbox.checked ? "text" : "password");
        });
    </script>
</body>
</html>
