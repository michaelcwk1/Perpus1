@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total artikel</p>
                <h5 class="font-weight-bolder">
                  10
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4 bg-white">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Judul Artikel</th>
                <th>Publikasi</th>
                <th>Kategori</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          @foreach ($article as $artic)
          <tr>
            <td>{{ $artic->title }}</td>
            <td>{{ $artic->created_at->diffForHumans() }}</td>
            <td>{{ $artic->categories->name }}</td>
            <td><a href="{{ route('detail-article', ['id'=>$artic->id]) }}" class="badge bg-warning">Detail</a></td>
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
