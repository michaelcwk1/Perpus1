@extends('layout.master')
@section('content')
    <div class="col-lg-12 p-3 bg-white card">
        <h3>Buat Artikel Baru</h3>
        <form id="postForm" action="{{ route('store-article') }}" method="post" enctype="multipart/form-data" class="row mt-3">
            @csrf
            <div class="col-12 mb-3">
                <label for="title" class="form-label">Judul Artikel</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukan judul" name="title" value="{{ old('title') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="category" class="form-label">Kategori</label>
                    <select id="category" class="form-select @error('category') is-invalid @enderror" name="category_id">
                        <option selected>Pilih kategori...</option>
                        @foreach ($category as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="formFile" class="form-label">Foto Header</label>
                <input class="form-control @error('image_header') is-invalid @enderror" type="file" name="image_header" id="formFile">
            </div>
            <div id="previewImage"  class="col-md-4 mb-3">
            </div>
            <div class="col-md-12 mb-3">
            <label for="user_id" class="form-label">Penulis</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
                    
                </select>
            </div>
            <div class="col-md-12" id="descEditor">
                <label for="quillEditor" class="form-label">Description</label>
                <div id="quillEditor" style="height: 200px;"></div>
            </div>
            <input type="hidden" name="naration" id="naration">
            <button type="submit" class="btn btn-primary mt-3">Buat</button>
        </form>
    </div>
    <script src="{{ asset('jquery3.4.6.js') }}"></script>
    <script>
        const quill = new Quill('#quillEditor', {
            theme: 'snow'
        });

        document.getElementById('postForm').onsubmit = function() {
            document.getElementById('naration').value = quill.root.innerHTML;
        };
    </script>

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
