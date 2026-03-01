@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    {{-- Header Section --}}
    <section class="bg-gray-50 py-10 text-center border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6">
            <h1 class="text-2xl md:text-4xl font-bold mb-4 text-[#8AB4E3] drop-shadow-sm">Tentang FMI</h1>
            <p class="text-[#8AB4E3] max-w-2xl mx-auto text-[13px] md:text-base leading-relaxed drop-shadow-[0_1px_1px_rgba(0,0,0,0.1)]">
                Mengenal lebih dekat FMI FMIPA UNNES sebagai wadah dakwah dan pengembangan diri bagi mahasiswa.
            </p>
        </div>
    </section>

    {{-- Siapa Kami Section --}}
    <section class="bg-white shadow-inner overflow-hidden py-16">
        {{-- Menambahkan px-8 untuk HP, px-12 untuk tablet, dan lg:px-6 untuk desktop --}}
        <div class="max-w-6xl mx-auto px-8 sm:px-12 lg:px-6">
            {{-- Menggunakan gap yang lebih besar di tablet (gap-12) agar teks tidak mepet logo --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-4 items-center">
                
                {{-- Kolom Teks --}}
                <div class="order-1 text-center lg:text-left">
                    <h2 class="text-xl md:text-3xl font-bold text-gray-800 mb-6">Siapa Kami?</h2>
                    {{-- Di tablet (sm), teks dibuat tidak terlalu lebar agar margin kanan kiri terasa luas --}}
                    <p class="text-gray-600 text-sm md:text-[19px] leading-relaxed md:leading-[1.8] mb-4 text-justify lg:text-left font-sans opacity-90 sm:max-w-2xl sm:mx-auto lg:max-w-none">
                        Forum Mahasiswa Islam (FMI) Fakultas Matematika dan Ilmu
                        Pengetahuan Alam Universitas Negeri Semarang merupakan lembaga
                        kemahasiswaan tingkat fakultas yang menjadi salah satu lembaga dakwah
                        kampus sebagai tempat meningkatkan ruhiyah bagi seluruh mahasiswa
                        FMIPA. Forum Mahasiswa Islam (FMI) juga merupakan sarana yang baik
                        untuk belajar berorganisasi sebagai bekal menjalani hidup di lingkungan
                        masyarakat kelak.
                    </p>
                </div>

                {{-- Kolom Logo --}}
                <div class="order-2 flex justify-center items-center mt-4 lg:mt-0">
                    <div class="relative group">
                        <div class="absolute -inset-6 md:-inset-10 bg-[#8AB4E3]/10 rounded-full blur-3xl group-hover:bg-[#8AB4E3]/20 transition-all duration-500"></div>
                        {{-- max-w disesuaikan agar di tablet tidak terlalu raksasa --}}
                        <img src="{{ asset('images/Logo FMI hitam.png') }}" 
                            alt="Logo FMI FMIPA UNNES" 
                            class="relative z-10 w-full max-w-[220px] sm:max-w-[280px] lg:max-w-[380px] h-auto drop-shadow-2xl transform transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Visi & Misi Section --}}
    <section class="bg-gray-50 py-16 shadow-inner">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-xl md:text-3xl font-bold text-gray-800">Visi & Misi</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                {{-- Visi --}}
                <div class="p-6 md:p-8 bg-white rounded-2xl border-l-8 border-[#8AB4E3] shadow-sm">
                    <h3 class="text-lg md:text-2xl font-bold text-[#8AB4E3] mb-4">Visi</h3>
                    <p class="text-gray-700 text-sm md:text-base leading-relaxed text-justify md:text-left">
                        Membangun ekosistem komunitas di FMIPA yang mendorong mahasiswa untuk tumbuh bersama, saling memberdayakan, dan menciptakan dampak nyata bagi diri sendiri serta lingkungan sekitar.
                    </p>
                </div>

                {{-- Misi --}}
                <div class="p-6 md:p-8 bg-white rounded-2xl border-l-8 border-slate-700 shadow-sm">
                    <h3 class="text-lg md:text-2xl font-bold text-slate-700 mb-4">Misi</h3>
                    <ul class="space-y-4">
                        @php
                            $misi = [
                                "Membangun ekosistem komunitas di FMIPA yang mendorong mahasiswa untuk tumbuh bersama, saling memberdayakan.",
                                "Menjadi jembatan penghubung antara mahasiswa, mentor, dan berbagai sumber daya yang relevan.",
                                "Menginisiasi program berbasis komunitas yang solutif dan berkelanjutan untuk menjawab tantangan."
                            ];
                        @endphp
                        @foreach($misi as $point)
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-[#8AB4E3] mt-1 mr-3 text-xs md:text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base leading-relaxed">{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Departemen Section --}}
    <section class="bg-white py-16 shadow-inner">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-xl md:text-3xl font-bold mb-12 text-center text-gray-800">Pengenalan Departemen</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($pengenalan_departments as $dept)
                    <div class="group bg-white p-5 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                        @if($dept->image)
                            <div class="overflow-hidden rounded-xl mb-4 h-40">
                                <img src="{{ asset('storage/' . $dept->image) }}" 
                                     alt="{{ $dept->name }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                        @endif

                        <h3 class="text-base md:text-lg font-bold mb-2 text-gray-800 leading-tight uppercase tracking-tight">
                            {{ $dept->name }}
                        </h3>
                        
                        <p class="text-gray-600 text-[13px] md:text-sm leading-relaxed text-justify font-normal opacity-90">
                            {{ $dept->description }}
                        </p>
                    </div>
                @endforeach
            </div>

            @if($pengenalan_departments->isEmpty())
                <div class="py-20 text-center">
                    <p class="text-gray-500 italic">Data departemen belum tersedia.</p>
                </div>
            @endif
        </div>
    </section>
@endsection