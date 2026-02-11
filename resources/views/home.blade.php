@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    {{-- Hero Section --}}
    <div class="relative h-[500px] md:h-[600px] flex items-center justify-center text-center text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/foto bersama.jpg') }}" 
                 alt="FMI FMIPA UNNES" 
                 class="w-full h-full object-cover">
            
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-50 via-transparent to-transparent"></div>
        </div>
        
        <div class="relative z-10 max-w-5xl px-8" 
             x-data="{ show: false }" 
             x-init="setTimeout(() => show = true, 100)">
            
            <h2 class="text-xl md:text-2xl font-medium mb-2 tracking-wide transform transition-all duration-700 ease-out"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Selamat Datang di
            </h2>

            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 leading-tight transform transition-all duration-1000 delay-300 ease-out"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Forum Mahasiswa Islam
            </h1>

            <p class="text-lg md:text-2xl font-semibold opacity-90 transform transition-all duration-1000 delay-500 ease-out"
               :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                Fakultas Matematika dan Ilmu Pengetahuan Alam <br>
                Universitas Negeri Semarang
            </p>
        </div>
    </div>

    {{-- Section Layanan & Informasi --}}
<div class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
        {{-- Grid Otomatis Berdasarkan Database --}}
        <div class="grid md:grid-cols-3 gap-8 justify-center items-stretch">
            
            @foreach($semua_link as $item)
                <div class="group bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col max-w-[320px] w-full mx-auto">
                    <div class="flex-grow">
                        {{-- Judul Dinamis --}}
                        <h3 class="text-xl font-bold text-gray-800 leading-tight mb-4">
                            {!! nl2br(e($item->judul)) !!}
                        </h3>
                        
                        {{-- Keterangan Dinamis --}}
                        <p class="text-gray-500 text-[14px] leading-relaxed mb-6">
                            {{ $item->keterangan }}
                        </p>
                    </div>

                    <div class="mt-auto">
                        <div class="w-full h-[1px] bg-blue-100 group-hover:bg-blue-400 transition-colors duration-500 mb-5"></div>
                        
                        {{-- Link Dinamis --}}
                        <a href="{{ $item->url }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between group-hover:text-blue-600 transition-colors">
                            <span class="font-bold text-gray-800 group-hover:text-blue-600 text-[15px]">
                                {{-- Logika teks tombol otomatis --}}
                                {{ str_contains(strtolower($item->judul), 'pendataan') ? 'Isi Pendataan' : 'Isi Formulir' }}
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection