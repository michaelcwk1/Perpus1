@extends('layout.master')
@section('content')
    <div class="col-lg-12 p-3 bg-white card">
        <h3>Detail Buku {{ $detailB->title }}</h3>
        <button id="editBtn" class="btn btn-warning">Edit</button>
        <button id="closeBtn" class="btn btn-danger d-none">Batal Edit</button>
        <form id="postForm" action="{{ route('update-books', ['id'=>$detailB->id]) }}" method="post" enctype="multipart/form-data" class="row mt-3">
            @csrf
            <div class="col-md-4 mb-3">
                <img class="col-md-12" src="{{ asset('cover-book/'.$detailB->cover) }}" alt="">
                <div class="col-md-12 mb-3 d-none" id="insertImage">
                    <label for="formFile" class="form-label">Ubah Foto Cover</label>
                    <input class="form-control @error('cover') is-invalid @enderror" type="file" name="cover" id="formFile">
                </div>
                <div id="previewImage"  class="col-md-12 mb-3">
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukan judul" name="title" value="{{ $detailB->title }}" readonly>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" placeholder="Masukan judul" name="genre" value="{{ $detailB->genre }}" readonly>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="link_book" class="form-label">Link Buku</label>
                    <input type="text" class="form-control @error('link_book') is-invalid @enderror" id="link_book" placeholder="Masukan judul" name="link_book" value="{{ $detailB->link_book }}" readonly>
                </div>
                <div id="wysiwygPreview">
                    <label for="" class="form-label d-block">Deskripsi</label>
                    {!! $detailB->description !!}
                </div>
                <div class="col-md-12 d-none" id="descEditor">
                        <label for="descEditor" class="form-label">Deskripsi</label>
                        <div id="quillEditor" style="height: 400px;">{!! $detailB->description !!}</div>
                </div>
            </div>
            <div class="col-md-12">
                @foreach ($detailB->images as $images)
                    <img class="col-md-2" src="{{ asset('image-book/'.$images->file_image) }}" alt="">
                @endforeach
                <div class="col-md-4 mb-3 d-none" id="insertImageBook">
                    <label for="imageBook" class="form-label">Ubah Foto Buku</label>
                    <input class="form-control @error('image_book') is-invalid @enderror" type="file" multiple name="image_book[]" id="imageBook">
                </div>
                <div id="previewImageBook" class="col-md-12 mb-3 justify-content-between d-flex d-none p-3">
                    <p class="form-label">Preview Gambar Buku :</p>
                </div>
            </div>
                <input type="hidden" name="description" id="description">
                <button type="submit" id="saveBtn" class="btn btn-primary mt-3 d-none">Simpan perubahan</button>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var editBtn = document.getElementById("editBtn")
            var closeBtn = document.getElementById("closeBtn")
            var saveBtn = document.getElementById("saveBtn")
            var imageField = document.getElementById("insertImage")
            var titleField = document.getElementById("title")
            var genreField = document.getElementById("genre")
            var wysiwygPreview = document.getElementById("wysiwygPreview")
            var wysiwygBox = document.getElementById("descEditor")
            var InsertBox = document.getElementById("insertImageBook")
            var LinkBook = document.getElementById("link_book")
            
            editBtn.addEventListener("click", function(){
                imageField.classList.remove("d-none")
                titleField.removeAttribute("readonly")
                genreField.removeAttribute("readonly")
                LinkBook.removeAttribute("readonly")
                closeBtn.classList.remove("d-none")
                editBtn.classList.add("d-none")
                saveBtn.classList.remove("d-none")
                wysiwygPreview.classList.add("d-none")
                wysiwygBox.classList.remove("d-none")
                InsertBox.classList.remove("d-none")
            });
            closeBtn.addEventListener("click", function(){
                imageField.classList.add("d-none")
                titleField.setAttribute("readonly", true)
                genreField.setAttribute("readonly", true)
                LinkBook.setAttribute("readonly", true)
                closeBtn.classList.add("d-none")
                editBtn.classList.remove("d-none")
                saveBtn.classList.add("d-none")
                wysiwygPreview.classList.remove("d-none")
                wysiwygBox.classList.add("d-none")
                InsertBox.classList.add("d-none")
            });
        });
    </script>
    <script src="{{ asset('jquery3.4.6.js') }}"></script>
    <script>
        const quill = new Quill('#quillEditor', {
            theme: 'snow'
        });

        document.getElementById('postForm').onsubmit = function() {
            document.getElementById('description').value = quill.root.innerHTML;
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

        document.getElementById('imageBook').addEventListener('change', function(event) {
            const imagePreview = document.getElementById('previewImageBook');

            const files = event.target.files;
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add("col-md-2");
                    imagePreview.classList.remove("d-none");
                    imagePreview.appendChild(img);
                }

                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection