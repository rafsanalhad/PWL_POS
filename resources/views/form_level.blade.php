@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Dashboard</h1>
@stop
@section('content')
<div class="card-body">
<form>
<div class="row">
<div class="col-sm-6">
<!-- text input -->
<div class="form-group">
<label>Kode Level</label><input type="text" class="form-control" placeholder="Masukkan Kode level">
<label>Nama Level</label><input type="text" class="form-control" placeholder="Masukkan nama level">
<div>
</div>
<button type="submit" class ="btn btn-info">Submit </button>
</div>
@stop
@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('js')
<script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop