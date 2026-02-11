<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LinkService;

class HomeController extends Controller
{
    // Fungsi untuk menampilkan halaman Beranda (depan)
    public function index()
    {
        // Kita ambil semua data dari database secara lengkap (Judul, Keterangan, URL)
        $semua_link = LinkService::all(); 

        // Kita kirim ke view 'home'
        return view('home', compact('semua_link'));
    }

    /** * Catatan: 
     * Fungsi adminDashboard() dan updateLinks() sudah tidak diperlukan lagi di sini 
     * karena sekarang kamu sudah menggunakan FILAMENT untuk mengelola datanya.
     * Jadi Controller ini fokus untuk menampilkan data ke halaman depan saja.
     */
}