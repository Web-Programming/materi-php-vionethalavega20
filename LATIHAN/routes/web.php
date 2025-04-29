<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('beranda', ['name' => 'Vionetha Lavega', 'email' => 'vionetha2085@gmail.com', 'address' => '2A Tribrata Street']);
});

Route::get('/berita/{id}/{judul?}', function ($id, $judul = null) {
    return view('berita', ['id' => $id, 'judul' => $judul]);
});
