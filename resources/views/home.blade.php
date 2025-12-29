@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="relative bg-blue-700 py-24 px-6 text-center text-white">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Selamat Datang di Forum Mahasiswa Indonesia</h1>
            <p class="text-xl text-blue-100 mb-8">Wadah kolaborasi, inovasi, dan pengabdian mahasiswa untuk Indonesia yang lebih baik.</p>
            <div class="flex justify-center space-x-4">
                <a href="/tentang-kami" class="bg-white text-blue-700 px-8 py-3 rounded-full font-bold hover:bg-blue-50 transition">Tentang Kami</a>
                <a href="/galeri" class="bg-transparent border-2 border-white px-8 py-3 rounded-full font-bold hover:bg-white hover:text-blue-700 transition">Lihat Kegiatan</a>
            </div>
        </div>
    </div>

    <div class="py-16 max-w-6xl mx-auto px-4 grid md:grid-cols-3 gap-8">
        <div class="text-center p-6 bg-white rounded-xl shadow-sm border">
            <div class="text-blue-600 text-4xl mb-4"><i class="fas fa-users"></i></div>
            <h3 class="font-bold text-xl mb-2">Kolaborasi</h3>
            <p class="text-gray-600">Membangun jaringan antar mahasiswa dari berbagai penjuru tanah air.</p>
        </div>
        <div class="text-center p-6 bg-white rounded-xl shadow-sm border">
            <div class="text-blue-600 text-4xl mb-4"><i class="fas fa-lightbulb"></i></div>
            <h3 class="font-bold text-xl mb-2">Inovasi</h3>
            <p class="text-gray-600">Menciptakan solusi kreatif untuk tantangan bangsa di masa depan.</p>
        </div>
        <div class="text-center p-6 bg-white rounded-xl shadow-sm border">
            <div class="text-blue-600 text-4xl mb-4"><i class="fas fa-hand-holding-heart"></i></div>
            <h3 class="font-bold text-xl mb-2">Pengabdian</h3>
            <p class="text-gray-600">Berperan aktif dalam kegiatan sosial dan pemberdayaan masyarakat.</p>
        </div>
    </div>
@endsection