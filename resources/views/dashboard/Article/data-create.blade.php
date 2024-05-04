@extends('layout.master')
@section('content')
    <div class="col-lg-12 p-3 bg-white card">
        <h3>Buat Artikel Baru</h3>
        <form action="" method="" class="row mt-3">
            <div class="col-12 mb-3">
                <label for="title" class="form-label">Judul Artikel</label>
                <input type="text" class="form-control" id="title" placeholder="Masukan judul">
            </div>
            <div class="col-md-4 mb-3">
                <label for="category" class="form-label">Kategori</label>
                    <select id="category" class="form-select" name="category">
                        <option selected>Pilih kategori...</option>
                        @foreach ($category as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="formFile" class="form-label">Foto Header</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <x-forms.tinymce-editor/>
            <button type="submit" class="btn btn-primary mt-3">Buat</button>
        </form>
    </div>
@endsection