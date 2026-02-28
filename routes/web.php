<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LdjController;

// 1. Halaman Beranda (Home)
Route::get('/', [HomeController::class, 'index']); 

// 2. Halaman Galeri
Route::get('/galeri', [GalleryController::class, 'index']);

// 3. Halaman Tentang Kami
Route::get('/tentang-fmiunnes', [AboutController::class, 'index'])->name('about');

Route::get('/struktur', [OrganizationController::class, 'index'])->name('struktur.index');

Route::get('/lembaga-dakwah-jurusan', [LdjController::class, 'index'])->name('ldj');

// 4. Halaman Kontak
Route::get('/kontak', [ContactController::class, 'index'])->name('contact.index');

Route::post('/contact-send', [ContactController::class, 'store'])->name('contact.send');

