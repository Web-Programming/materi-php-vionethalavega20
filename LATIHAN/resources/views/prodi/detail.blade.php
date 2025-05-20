@extends('layout.master')

@section('title', "Detail Program Studi")

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Detail Program Studi</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url("/prodi") }}">Program Studi</a></li>
          <li class="breadcrumb-item active">Detail</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Detail Program Studi</h3>
          </div>
          <div class="card-body">
              ID Prodi: {{ $prodi->id }}<br>
              Nama Prodi: {{ $prodi->nama }}<br>
              Kode Prodi: {{ $prodi->kode_prodi }}<br>
              Tanggal Buat: {{ $prodi->created_at }}<br>
              Tanggal Update: {{ $prodi->updated_at }}<br>
          </div>
          <div class="card-footer">Footer</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
