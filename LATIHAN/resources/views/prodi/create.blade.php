@extends('layout.master')

@section('title', "Halaman List Prodi")

@section('content')
<!--begin::App Content Header-->
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Program Studi</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url("/prodi") }}">Program Studi</a></li>
          <li class="breadcrumb-item active" aria-current="page">Create Program Studi</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--end::App Content Header-->

<!--begin::App Content-->
<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Create Program Studi</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
              </button>
              <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                <i class="bi bi-x-lg"></i>
              </button>
            </div>
          </div>
          <div class="card-body">

            @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
            @endif

            <form method="POST" action="{{ url('prodi') }}">
              @csrf
              <div class="mb-3">
                <label>Nama Prodi</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                @error('nama')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label>Kode Prodi</label>
                <input type="text" name="kode_prodi" class="form-control" value="{{ old('kode_prodi') }}">
                @error('kode_prodi')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

          </div>
          <div class="card-footer">Footer</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::App Content-->
@endsection

