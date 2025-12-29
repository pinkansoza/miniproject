<?php

use App\Models\Gallery;
use Illuminate\Support\Facades\Route;

// 1. Halaman Beranda (Home)
Route::get('/', function () {
    // Kita panggil file home.blade.php
    return view('home'); 
});

// 2. Halaman Galeri (Pindahan dari yang lama)
Route::get('/galeri', function () {
    // Mengambil semua data galeri dari database
    $galleries = Gallery::latest()->get();

    // Kirim data ke file welcome.blade.php
    return view('welcome', compact('galleries'));
});

// 3. Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
});

// 4. Halaman Kontak
Route::get('/kontak', function () {
    return view('contact');
});