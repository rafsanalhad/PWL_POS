@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
<div class="container">
<div class="card">
<div class="card-header">
    <div class="d-flex justify-content-between">
        Manage Kategori <a href="/kategori/create" class="btn btn-primary ml-auto">Tambah Kategori</a>

    </div>
</div>
<div class="card-body">
{{ $dataTable->table() }}
</div>
</div>
</div>
@endsection

@push('scripts')
{{ $dataTable->scripts() }}
@endpush