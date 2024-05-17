@extends('layout.master')
@section('content')
    <div class="row mt-4 bg-white">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Genre</th>
                <th>Tanggal</th>
                <th>Tampikan Di Beranda</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->created_at->diffForHumans() }}</td>
                <td>
                    <form action="{{ route('top-books', ['id'=>$book->id]) }}" method="post">
                        @csrf
                        @php
                            if($book->top_book === 'no'){
                                echo '
                                <input name="top_book" value="yes" type="text" hidden>
                                <button type="submit" class="badge bg-info" style="border: none !important">Pasang Sebagai Top Book</button>';
                            }else{
                                echo '
                                <input name="top_book" value="no" type="text" hidden>
                                <button type="submit" class="badge bg-success" style="border: none !important">Copot Dari Top Book</button>';
                            }
                            @endphp
                </form>
            </td>
            <td>
                <a href="{{ route('edit-books', ['id'=>$book->id]) }}" class="badge bg-primary">Detail</a>
                <a href="{{ route('delete-books', ['id'=>$book->id]) }}" class="badge bg-danger">Hapus</a>
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