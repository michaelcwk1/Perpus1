@extends('layout.master')
@section('content')
    <div class="row mt-4 bg-white">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Judul Artikel</th>
                <th>Penuis</th>
                <th>Kategori</th>
                <th>Komentar</th>
                <th>Tanggal</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($article as $a)
                
            <tr>
                <td>{{ $a->title }}</td>
                <td>{{ $a->author }}</td>
                <td>{{ $a->categories->name }}</td>
                <td>0</td>
                <td>{{ $a->created_at->diffForHumans() }}</td>
                <td>
                    <a href="" class="badge bg-primary">Detail</a>
                    <a href="" class="badge bg-warning">Sunting</a>
                    <a href="" class="badge bg-danger">Hapus</a>
                </td>
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