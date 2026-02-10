{{-- Menggunakan kerangka dari layouts/app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi judul halaman --}}
@section('title', 'Galeri Kegiatan')

{{-- Mengisi konten utama --}}
@section('content')
    {{-- Header Section --}}
    <header class="bg-blue-600 py-16 text-white text-center">
        <h1 class="text-4xl font-extrabold mb-4">Galeri Kegiatan</h1>
        <p class="text-blue-100 max-w-2xl mx-auto px-4">Dokumentasi perjalanan Forum Mahasiswa Islam (FMI) dalam berbagai kegiatan.</p>
    </header>

    {{-- Gallery Grid Section --}}
    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($galleries as $item)
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden border group flex flex-col h-full">
        {{-- Gambar --}}
        <div class="overflow-hidden">
            <img src="{{ asset('storage/' . $item->image) }}" 
                 class="w-full aspect-video object-cover transform group-hover:scale-110 transition duration-500"
                 alt="{{ $item->title }}">
        </div>

        <div class="p-6 flex-1 flex flex-col">
            <h2 class="font-bold text-xl text-gray-800">{{ $item->title }}</h2>
            
            @if($item->description)
                <div class="mt-3">
                    @php
                        // 1. Cari link di dalam deskripsi menggunakan Regex
                        $pattern = '/https?:\/\/[^\s]+/';
                        preg_match($pattern, $item->description, $matches);
                        $url = $matches[0] ?? null;
                        
                        // 2. Bersihkan teks dari link agar deskripsi tetap rapi
                        $plainText = trim(preg_replace($pattern, '', $item->description));
                    @endphp

                    {{-- Tampilkan Teks Deskripsi (jika ada selain link) --}}
                    @if($plainText)
                        <p class="text-gray-600 text-sm leading-relaxed mb-3">
                            {{ $plainText }}
                        </p>
                    @endif

                    {{-- Tampilkan Tombol GDrive jika ditemukan link --}}
                    @if($url)
                        <a href="{{ $url }}" target="_blank" 
                           class="inline-flex items-center justify-center w-full px-4 py-2 bg-blue-600 text-white text-sm font-bold rounded-lg hover:bg-blue-700 transition duration-300">
                            <i class="fab fa-google-drive mr-2"></i>
                            Buka Folder Dokumentasi
                        </a>
                    @endif
                </div>
            @endif

            {{-- Footer: Tanggal Kegiatan Manual --}}
            <div class="mt-auto pt-4 border-t border-gray-100 flex items-center text-gray-400 text-xs font-medium">
                <i class="far fa-calendar-alt mr-2"></i>
                @if($item->date_of_event)
                    {{-- Menampilkan tanggal yang kamu input manual di Filament --}}
                    {{ \Carbon\Carbon::parse($item->date_of_event)->translatedFormat('d F Y') }}
                @else
                    {{-- Fallback jika lupa isi tanggal kegiatan --}}
                    {{ $item->created_at->translatedFormat('d F Y') }}
                @endif
            </div>
        </div>
    </div>
@endforeach
        </div>

        {{-- Jika data kosong --}}
        @if($galleries->isEmpty())
            <div class="text-center py-20">
                <div class="text-gray-300 text-6xl mb-4">
                    <i class="fas fa-image"></i>
                </div>
                <p class="text-gray-500 text-lg">Belum ada dokumentasi kegiatan saat ini.</p>
            </div>
        @endif
    </div>
@endsection