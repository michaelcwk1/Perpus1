@extends('layout.master')
@section('content')
    <div class="col-lg-12 p-3 bg-white card">
        <h3>Buat Artikel Baru</h3>
        <form action="" method="" class="row mt-3">
            <div class="col-12 mb-3">
                <label for="inputAddress" class="form-label">Judul Artikel</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-4 mb-3">
                <label for="inputState" class="form-label">Kategori</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
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