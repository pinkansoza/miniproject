<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi data (agar tidak kosong)
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // 2. Simpan ke Database
        Contact::create($request->all());

        // 3. Kembali ke halaman kontak dengan pesan sukses
        return back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}