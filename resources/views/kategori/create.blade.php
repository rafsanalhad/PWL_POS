@extends('layout.app')
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Buat kategori baru</h3>
        </div>

        <form method="post" action="{{ url('/kategori') }}">
            @csrf <!-- Tambahkan ini untuk token CSRF -->
            <div class="card-body">
                {{-- @if($errors->any()) <!-- Perbaikan di sini -->
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error) <!-- Perbaikan di sini -->
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}
                <div class="form-group">
                    <label for="kodeKategori">Kode Kategori</label>
                    <input type="text" class="form-control @error('kategori_kode') is-invalid @enderror" id="kodeKategori" name="kategori_kode" placeholder="untuk makanan, contoh:MKN"> <!-- Perbaikan di sini -->
                    @error('kategori_kode')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control @error('kategori_kode') is-invalid @enderror" id="namakategori" name="kategori_nama" placeholder="Nama"> <!-- Perbaikan di sini -->

                    @error('kategori_nama')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
