@extends('layout.master')
@section('content')
    <div class="col-lg-12 p-3 bg-white card">
        <h3>Buat Kategori Baru</h3>
        <form action="{{ route('store-category') }}" method="post" class="row mt-3">
            @csrf
            <div class="col-12 mb-3">
                <label for="category" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="category" placeholder="Masukan kategori" name="name">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Buat</button>
        </form>
    </div>
    <div class="row mt-4 bg-white">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ( $category as $c )
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $c->name }}</td>
                <td><a href="{{ route('destroy-category', ['id'=>$c->id]) }}" class="badge bg-warning">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.6/js/dataTables.bootstrap5.js"></script>
  <script>
    new DataTable('#example');
  </script>
@endsection