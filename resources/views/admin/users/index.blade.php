@extends('layout.master')
@section('content')
    <div class="row bg-white rounded">
        <h3>Daftar User</h3>
        <div>
            <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama User</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            @php
                $no = 1;
            @endphp
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('detail-users', ['id'=>$user->id]) }}" class="badge bg-info">Detail</a>
                    <a href="{{ route('delete-users', ['id'=>$user->id]) }}" class="badge bg-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.6/js/dataTables.bootstrap5.js"></script>
  <script>
    new DataTable('#example');
  </script>
@endsection