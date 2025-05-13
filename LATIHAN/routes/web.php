<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('beranda', ['name' => 'Vionetha Lavega', 'email' => 'vionetha2085@gmail.com', 'address' => '2A Tribrata Street']);
});

Route::get('/berita/{id}/{judul?}', function ($id, $judul = null) {
    return view('berita', ['id' => $id, 'judul' => $judul]);
});

//membuat route ke halaman prodi index melalui controller ProdiController
Route::get('/prodi/index', [ProdiController::class,'index']);

// Resource Route untuk setiap controller sesuai dengan soal nomor 2

// 1. Materi
Route::resource('materi', MateriController::class);

// 2. Prodi
Route::resource('prodi', ProdiController::class);

// 3. Fakultas
Route::resource('fakultas', FakultasController::class);

// 4. Mahasiswa
Route::resource('mhs', MahasiswaController::class);

// 5. Dosen
Route::resource('dosen', DosenController::class);

