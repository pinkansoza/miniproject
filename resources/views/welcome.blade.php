{{-- Menggunakan kerangka dari layouts/app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi judul halaman --}}
@section('title', 'Galeri Kegiatan')

{{-- Mengisi konten utama --}}
@section('content')
    <header class="bg-blue-600 py-16 text-white text-center">
        <h1 class="text-4xl font-extrabold mb-4">Galeri Kegiatan</h1>
        <p class="text-blue-100 max-w-2xl mx-auto px-4">Dokumentasi perjalanan FMI.</p>
    </header>

    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($galleries as $item)
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden border">
                    <img src="{{ asset('storage/' . $item->image) }}" class="w-full aspect-video object-cover">
                    <div class="p-6">
                        <h2 class="font-bold text-xl">{{ $item->title }}</h2>
                        <p class="text-gray-600 italic">"{{ $item->description }}"</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection