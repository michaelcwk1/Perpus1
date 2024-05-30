@extends('layout.master')
@section('content')
    <div class="col-lg-12 p-3 bg-white card">
        <h3>Detail {{ $users->name }}</h3>
        <button id="editBtn" class="btn btn-warning">Edit</button>
        <button id="closeBtn" class="btn btn-danger d-none">Batal Edit</button>
        <form action="{{ route('update-users', ['id'=>$users->id]) }}" method="post" enctype="multipart/form-data" class="row mt-3">
            @csrf
            <div class="col-md-4 mb-3">
                <div class="col-md-12 mb-3" id="insertImage">
                    <label for="formFile" class="form-label">Ubah Avatar</label>
                    <input class="form-control @error('avatar') is-invalid @enderror" type="file" name="avatar" id="formFile">
                </div>
                <div id="previewImage"  class="col-md-12 mb-3">
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan judul" name="name" value="{{ $users->name }}" readonly>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukan judul" name="password" value="{{ $users->password }}" readonly>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan judul" name="email" value="{{ $users->email }}" readonly>
                </div>
                <button type="submit" id="saveBtn" class="btn btn-primary mt-3 d-none">Simpan perubahan</button>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var editBtn = document.getElementById("editBtn")
            var closeBtn = document.getElementById("closeBtn")
            var saveBtn = document.getElementById("saveBtn")
            var nameField = document.getElementById("name")
            var passwordField = document.getElementById("password")
            var emailField = document.getElementById("email")
            
            editBtn.addEventListener("click", function(){
                nameField.removeAttribute("readonly")
                passwordField.removeAttribute("readonly")
                emailField.removeAttribute("readonly")
                closeBtn.classList.remove("d-none")
                editBtn.classList.add("d-none")
                saveBtn.classList.remove("d-none")
            });

            closeBtn.addEventListener("click", function(){
                nameField.setAttribute("readonly", true)
                passwordField.setAttribute("readonly", true)
                emailField.setAttribute("readonly", true)
                closeBtn.classList.add("d-none")
                editBtn.classList.remove("d-none")
                saveBtn.classList.add("d-none")
            });
        });
    </script>
    <script src="{{ asset('jquery3.4.6.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#formFile').on('change', function(){
                var files = $(this)[0].files;

                if(files.length > 0) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#previewImage').html('<img src="' +e.target.result+'" alt="Preview" style="width: 100%">');
                    };

                    reader.readAsDataURL(files[0]);
                } else {
                    $('#previewImage').html('');
                }
            });
        });
    </script>
@endsection