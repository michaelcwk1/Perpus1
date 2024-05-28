<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Smecone - Daftar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-row">
        <div class="max-[1024px]:hidden w-2/5 bg-slate-400 h-screen">
            <img src="{{ asset('assets/perpus-smc/images/hero-banner-2.jpeg') }}" alt="" srcset="">
        </div>
        <div class="max-[1024px]:w-full w-3/5 h-screen">
            <div class="flex flex-row items-center gap-3 justify-center mt-32">
                <img src="{{ asset('assets/perpus-smc/images/smc.png') }}" alt="" width="72">
                <h2 class="text-xl">Perpustakaan SMK Negeri 1 Purwokerto</h2>
            </div>
            <div class="p-3 mt-10">
                <p class="text-center text-lg mb-6">Daftar ke Perpustakaan</p>
                <form action="{{ route('create-user') }}" method="post">
                    @csrf
                    <input class="border-b border-b-2 border-b-slate-300 rounded-sm outline-none w-3/5 p-2 mx-auto block mb-4" type="text" name="name" placeholder="Buat username kamu">
                    <input class="border-b border-b-2 border-b-slate-300 rounded-sm outline-none w-3/5 p-2 mx-auto block mb-4" type="email" name="email" placeholder="Buat email kamu">
                    <div class="w-3/5 mx-auto flex flex-col">
                        <input id="inputPass" class="mb-3 border-b border-b-2 border-b-slate-300 rounded-sm outline-none  p-2  block" type="password" name="password" placeholder="Buat password kamu">
                        <div class="flex justify-start m-1 gap-2">
                            <input type="checkbox" id="lookPass">
                            <small>Lihat kata sandi</small>
                        </div>
                    </div>
                    <button type="submit" class="block mx-auto bg-red-500 mt-4 p-1 rounded text-white px-3">Daftar</button>
                </form>
                <p class="text-center text-sm mt-12">Sudah mempunyai akun ? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Masuk disini</a></p>
            </div>
        </div>
    </div>
    <script>
            var cekCheckbox = document.getElementById("lookPass")
            var showPassInput = document.getElementById("inputPass")
            
            cekCheckbox.addEventListener('change', function() {
            if(cekCheckbox.checked){
                showPassInput.setAttribute("type", "text")
            }else {
                showPassInput.setAttribute("type", "password")
            }
        });
    </script>
</body>
</html>