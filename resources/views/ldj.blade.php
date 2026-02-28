@extends('layouts.app')

@section('title', 'Lembaga Dakwah Jurusan')

@section('content')
    {{-- Header Section --}}
    <section class="bg-white py-16 shadow-inner min-h-screen">
    <div class="max-w-7xl mx-auto px-6">
        
        @if($all_ldj->isEmpty())
            <div class="py-20 text-center">
                <p class="text-gray-500 italic font-sans">Data LDJ belum tersedia.</p>
            </div>
        @else
            {{-- Menggunakan flex wrap & justify-center agar kartu berkumpul di tengah --}}
            <div class="flex flex-wrap justify-center gap-10 items-stretch">
                @foreach($all_ldj as $item)
                    {{-- Lebar kartu disesuaikan (w-full untuk HP, fixed width untuk tablet ke atas) --}}
                    <div class="group bg-white p-8 rounded-[2.5rem] shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 flex flex-col w-full sm:w-[calc(50%-1.5rem)] lg:w-[350px]">
                        
                        <div class="flex-grow flex flex-col items-center">
                            {{-- Container Logo --}}
                            <div class="relative mb-6">
                                <div class="absolute -inset-2 bg-blue-50 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="relative w-32 h-32 bg-gray-50 rounded-2xl p-4 flex items-center justify-center border border-gray-50 overflow-hidden">
                                    @if($item->logo)
                                        <img src="{{ asset('storage/' . $item->logo) }}" 
                                             alt="{{ $item->nama_jurusan }}" 
                                             class="max-w-full max-h-full object-contain transition-transform duration-700 group-hover:scale-110">
                                    @else
                                        <i class="fas fa-university text-gray-300 text-4xl"></i>
                                    @endif
                                </div>
                            </div>

                            {{-- Teks Judul --}}
                            <h3 class="text-l md:text-xl font-semibold text-gray-800 mb-4 text-center font-sans tracking-tight uppercase leading-tight">
                                {{ $item->nama_jurusan }}
                            </h3>
                            
                            {{-- Deskripsi Rata Kanan-Kiri --}}
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed text-justify font-sans mb-8 opacity-90">
                                {{ $item->deskripsi }}
                            </p>
                        </div>

                        {{-- Tombol Instagram Box --}}
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