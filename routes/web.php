<?php

use App\Models\Gallery;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

// 1. Halaman Beranda (Home) - SEKARANG LEWAT CONTROLLER
Route::get('/', [HomeController::class, 'index']); 

// 2. Halaman Galeri
Route::get('/galeri', function () {
    $galleries = Gallery::latest()->get();
    return view('welcome', compact('galleries'));
});

// 3. Halaman Tentang Kami
Route::get('/tentang-fmiunnes', [AboutController::class, 'index'])->name('about');

Route::get('/struktur-organisasi', function () {
    return view('struktur'); 
});

// 4. Halaman Kontak
Route::get('/kontak', function () {
    return view('contact');
});

Route::post('/contact-send', [ContactController::class, 'store'])->name('contact.send');