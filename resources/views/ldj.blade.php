@extends('layouts.app')

@section('title', 'Lembaga Dakwah Jurusan')

@section('content')
    <section class="bg-gray-50 py-10 text-center border-b border-gray-100">
        <h1 class="text-2xl md:text-4xl font-bold mb-4 text-[#8AB4E3] drop-shadow-m">
            Lembaga Dakwah Jurusan
        </h1>
        <p class="text-[#8AB4E3] max-w-2xl mx-auto px-6 text-sm md:text-base leading-relaxed drop-shadow-[0_1px_1px_rgba(0,0,0,0.1)]">
            Mengenal lebih dekat Lembaga Dakwah Jurusan yang ada di bawah naungan FMI FMIPA UNNES.
        </p>
    </section>

    {{-- Content Section --}}
    <section class="bg-white shadow-inner min-h-screen py-16">
        <div class="max-w-7xl mx-auto px-6">
            
            @if($all_ldj->isEmpty())
                <div class="py-20 text-center">
                    <div class="text-gray-300 text-6xl mb-4">
                        <i class="fas fa-university"></i>
                    </div>
                    <p class="text-gray-500 italic font-sans">Data LDJ belum tersedia.</p>
                </div>
            @else
                {{-- Grid Flexbox agar ke tengah --}}
                <div class="flex flex-wrap justify-center gap-10 items-stretch">
                    @foreach($all_ldj as $item)
                        <div class="group bg-white p-8 rounded-[2.5rem] shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 flex flex-col w-full sm:w-[calc(50%-1.5rem)] lg:w-[350px]">
                            
                            <div class="flex-grow flex flex-col items-center">
                                {{-- Container Logo Tanpa Bayangan Box --}}
                                <div class="relative mb-8 flex justify-center items-center h-32 w-full">
                                    <div class="absolute inset-0 bg-[#8AB4E3]/10 rounded-full blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                                    
                                    @if($item->logo)
                                        <img src="{{ asset('storage/' . $item->logo) }}" 
                                             alt="{{ $item->nama_jurusan }}" 
                                             class="max-w-[140px] max-h-full object-contain relative z-10 transition-transform duration-700 group-hover:scale-110 filter drop-shadow-sm">
                                    @else
                                        <i class="fas fa-university text-gray-200 text-5xl relative z-10"></i>
                                    @endif
                                </div>

                                {{-- Teks Judul --}}
                                <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-4 text-center font-sans tracking-tight leading-tight">
                                    {{ $item->nama_jurusan }}
                                </h3>
                                
                                {{-- Deskripsi Rata Kanan-Kiri --}}
                                <p class="text-gray-600 text-xs md:text-sm leading-relaxed text-justify font-sans mb-2 opacity-90">
                                    {{ $item->deskripsi }}
                                </p>
                            </div>

                            {{-- Tombol Instagram --}}
                            @if($item->instagram_link)
                                <div class="mt-auto pt-4 border-t border-gray-50">
                                    <a href="{{ $item->instagram_link }}" 
                                       target="_blank" 
                                       class="flex items-center justify-center gap-2 bg-gradient-to-r from-[#833ab4] via-[#fd1d1d] to-[#fcb045] text-white font-bold text-xs tracking-widest py-3.5 rounded-xl shadow-md hover:brightness-110 active:scale-95 transition-all font-sans">
                                        <i class="fab fa-instagram text-base"></i>
                                        Kunjungi Instagram
                                    </a>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </section>
@endsection