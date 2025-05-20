@extends('layout.master')

@section('title', "Edit Program Studi")

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Edit Program Studi</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url("/prodi") }}">Program Studi</a></li>
          <li class="breadcrumb-item active">Edit</li>
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
            <h3 class="card-title">Edit Program Studi</h3>
          </div>
          <div class="card-body">

            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            <form method="POST" action="{{ url('prodi/' . $prodi->id) }}">
              @csrf
              @method("PUT")

              <div class="mb-3">
                <label>Nama Prodi</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama', $prodi->nama) }}">
                @error('nama')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label>Kode Prodi</label>
                <input type="text" name="kode_prodi" class="form-control" value="{{ old('kode_prodi', $prodi->kode_prodi) }}">
                @error('kode_prodi')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
          <div class="card-footer">Footer</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

