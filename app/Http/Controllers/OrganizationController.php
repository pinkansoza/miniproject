<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
{
    // 1. Ambil data departemen (untuk looping yang Najmi, Sofia, dll)
    $departements = \App\Models\OrganizationStructure::all();
    
    // 2. Ambil judul dinamis dari tabel settings
    // Jika data tidak ada di database, defaultnya 'Kepengurusan FMI 2024'
    $title = \App\Models\Setting::where('key', 'org_title')->value('value') ?? 'Kepengurusan FMI 2024';

    // 3. Kirim kedua variabel ke file blade 'struktur'
    return view('struktur', compact('departements', 'title'));
}
}
