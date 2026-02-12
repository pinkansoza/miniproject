<?php

namespace App\Http\Controllers;

use App\Models\Contact; // Ini untuk menyimpan pesan masuk
use App\Models\ContactInfo; // Ini untuk mengambil info Sekretariat/WA/Email
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Fungsi untuk menampilkan halaman kontak
    public function index()
    {
        // Mengambil semua data dari tabel contact_infos
        $contact_infos = ContactInfo::all();

        return view('contact', compact('contact_infos'));
    }

    // Fungsi untuk memproses form kirim pesan (sudah ada di kodemu)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}