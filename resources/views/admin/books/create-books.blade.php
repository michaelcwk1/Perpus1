@extends('layout.master')
@section('content')
    <div class="col-md-12 p-3 bg-white card">
        <h3>Buat Buku Baru</h3>
        <form action="{{ route('store-books') }}" method="post" enctype="multipart/form-data" class="row mt-3">
            @csrf
                <div class="col-md-6">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukan judul" name="title" value="{{ old('title') }}">
                </div>
                <div class="col-md-6">
                    <label for="genre" class="form-label">Genre Buku</label>
                    <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" placeholder="Masukan judul" name="genre" value="{{ old('title') }}">
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label">Deskripsi Buku</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            <div class="col-md-4 mb-3">
                <label for="formFile" class="form-label">Foto Buku</label>
                <input class="form-control @error('image_book') is-invalid @enderror" type="file" multiple name="image_book[]" id="formFile">
            </div>
            <div id="previewImage"  class="col-md-4 mb-3">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Buat</button>
        </form>
    </div>
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
