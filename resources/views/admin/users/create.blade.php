@extends('layout.master')
@section('content')
    <div class="row bg-white rounded">
        <h3>Buat User</h3>
        <form action="{{ route('make-users') }}" method="post">
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan judul" name="name" value="{{ old('name') }}">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukan judul" name="password" value="{{ old('password') }}">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan judul" name="email" value="{{ old('email') }}">
        </div>
        <div class="col-md-12 mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button class="btn btn-primary">Buat</button>
    </form>
    </div>
@endsection