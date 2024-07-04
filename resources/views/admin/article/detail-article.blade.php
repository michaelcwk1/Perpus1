@extends('layout.master')
@section('content')
    <div class="col-lg-12 p-3 bg-white card">
        <h3>Detail {{ $detail->title }}</h3>
        <button id="editBtn" class="btn btn-warning">Edit</button>
        <button id="closeBtn" class="btn btn-danger d-none">Batal Edit</button>
        <form id="postForm" action="{{ route('update-article', ['id'=>$detail->id]) }}" method="post" enctype="multipart/form-data" class="row mt-3">
            @csrf
            <div class="col-md-4 mb-3">
                <img class="col-md-12" src="{{ asset('cover-image/'.$detail->image_header) }}" alt="">
                <div class="col-md-12 mb-3 d-none" id="insertImage">
                    <label for="formFile" class="form-label">Foto Header</label>
                    <input class="form-control @error('image_header') is-invalid @enderror" type="file" name="image_header" id="formFile">
                </div>
                <div id="previewImage"  class="col-md-12 mb-3">
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <label for="title" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukan judul" name="title" value="{{ $detail->title }}" readonly>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select id="category"  disabled  class="form-select @error('category') is-invalid @enderror" name="category_id" >
                        <option >Pilih kategori...</option>
                        @foreach ($category as $c)
                        <option value="{{ $c->id }}" {{ $detail->categories->name === $c->name ? 'selected' : '' }}>{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="author" class="form-label">Penulis</label>
                    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Masukan judul" name="author" value="{{ Auth::user()->name }}" readonly>
                </div>
                <div id="wysiwygPreview">
                    <label for="" class="form-label">Isi Artikel</label>
                    {!! $detail->naration !!}
                </div>
                <div class="col-md-12 d-none" id="descEditor">
                    <label for="quillEditor" class="form-label">Isi Artikel</label>
                    <div id="quillEditor" style="height: 400px;">{!! $detail->naration !!}</div>
                </div>
            </div>
                <input type="hidden" name="naration" id="naration">
                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
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
            var categoryField = document.getElementById("category")
            var authorField = document.getElementById("author")
            var wysiwygPreview = document.getElementById("wysiwygPreview")
            var wysiwygBox = document.getElementById("descEditor")

            editBtn.addEventListener("click", function(){
                imageField.classList.remove("d-none")
                titleField.removeAttribute("readonly")
                categoryField.removeAttribute("disabled")
                authorField.removeAttribute("readonly")
                closeBtn.classList.remove("d-none")
                editBtn.classList.add("d-none")
                saveBtn.classList.remove("d-none")
                wysiwygPreview.classList.add("d-none")
                wysiwygBox.classList.remove("d-none")
            });
            closeBtn.addEventListener("click", function(){
                imageField.classList.add("d-none")
                titleField.setAttribute("readonly", true)
                categoryField.setAttribute("disabled", true)
                authorField.setAttribute("readonly", true)
                closeBtn.classList.add("d-none")
                editBtn.classList.remove("d-none")
                saveBtn.classList.add("d-none")
                wysiwygPreview.classList.remove("d-none")
                wysiwygBox.classList.add("d-none")
            });
        });
    </script>
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