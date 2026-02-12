<?php

namespace App\Http\Controllers;

use App\Models\LinkService; // Sesuaikan dengan nama model link kamu
use App\Models\Department;  // WAJIB TAMBAHKAN INI
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Ambil data link (untuk section Layanan & Informasi)
        // Sesuaikan 'LinkService' dengan nama Model yang kamu pakai untuk $semua_link
        $semua_link = LinkService::all(); 

        // 2. Ambil data departemen dari database (UNTUK MEMPERBAIKI ERROR)
        $departments = Department::all();

        // 3. Kirim kedua data tersebut ke view 'home'
        return view('home', compact('semua_link', 'departments'));
        
    }
}