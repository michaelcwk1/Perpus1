@extends('layout.master')
@section('content')
    <div class="row mt-4 bg-white p-3 rounded">
        <h3>Komentar Artikel</h3>
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Komentar</th>
                <th>Postingan</th>
                <th>Waktu</th>
                <th>Lihat Pada Postingan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
            <tr>
                <td>{{ $comment->name }}</td>
                <td>{{ $comment->comment }}</td>
                <td>{{ $comment->articles->title }}</td>
                <td>{{ $comment->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('post', ['article'=>$comment->articles->slug]) }}" class="badge bg-primary">Detail</a>
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