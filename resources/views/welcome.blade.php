@extends('layouts.app')

@section('title', 'Galeri Kegiatan')

@section('content')
    {{-- Header Section --}}
    <header class="bg-gray-50 py-10 text-center border-b border-gray-100">
        <h1 class="text-2xl md:text-4xl font-bold mb-4 text-[#8AB4E3] drop-shadow-sm">
            Galeri Kegiatan
        </h1>
        <p class="text-[#8AB4E3] max-w-2xl mx-auto px-6 text-sm md:text-base leading-relaxed drop-shadow-[0_1px_1px_rgba(0,0,0,0.1)]">
            Dokumentasi perjalanan FMI FMIPA UNNES dalam berbagai kegiatan.
        </p>
    </header>

    {{-- Gallery Section --}}
    <section class="bg-white shadow-inner min-h-screen py-16">
        <div class="max-w-[90rem] mx-auto px-6">
            
            @if($galleries->isEmpty())
                <div class="py-20 text-center">
                    <div class="text-gray-200 text-6xl mb-4">
                        <i class="fas fa-images"></i>
                    </div>
                    <p class="text-gray-500 italic">Belum ada dokumentasi kegiatan saat ini.</p>
                </div>
            @else
                {{-- Flexbox Wrap: justify-center agar kartu yang sisa tetap di tengah --}}
                <div class="flex flex-wrap justify-center gap-6 md:gap-8 items-stretch">
                    @foreach($galleries as $item)
                        <div class="group bg-white rounded-[1.5rem] shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 flex flex-col w-full sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1.5rem)] min-w-[260px] overflow-hidden">
                            
                            {{-- Container Gambar --}}
                            <div class="overflow-hidden relative h-48">
                                <img src="{{ asset('storage/' . $item->image) }}" 
                                     class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                                     alt="{{ $item->title }}">
                                <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/5 transition duration-500"></div>
                            </div>

                            <div class="p-6 flex-1 flex flex-col">
                                {{-- Judul: Tampil semua --}}
                                <h3 class="text-base md:text-lg font-bold text-gray-800 mb-3 text-center tracking-tight leading-tight uppercase">
                                    {{ $item->title }}
                                </h3>
                                
                                {{-- Deskripsi: Tampil penuh --}}
                                <div class="flex-grow">
                                    @if($item->content)
                                        <p class="text-gray-600 text-[11px] md:text-xs leading-relaxed text-justify mb-4 opacity-90">
                                            {{ $item->content }}
                                        </p>
                                    @else
                                        <p class="text-gray-400 text-[11px] italic mb-4 text-center">
                                            Tidak ada deskripsi kegiatan.
                                        </p>
                                    @endif
                                </div>

                                {{-- Tombol Dokumentasi --}}
                                @if($item->description)
                                    <div class="mt-auto pt-4 border-t border-gray-50">
                                        <a href="{{ $item->description }}" target="_blank" 
                                           class="flex items-center justify-center gap-2 bg-[#7aa2d1] hover:bg-[#8AB4E3] text-white font-bold text-[10px] tracking-widest py-3 rounded-xl shadow-md transition-all">
                                            <i class="fab fa-google-drive text-sm"></i>
                                            Buka Folder Dokumentasi
                                        </a>
                                    </div>
                                @endif

                                {{-- Footer: Tanggal --}}
                                <div class="mt-3 flex items-center justify-center text-gray-400 text-[10px] font-medium">
                                    <i class="far fa-calendar-alt mr-2 text-[#8AB4E3]"></i>
                                    {{ \Carbon\Carbon::parse($item->date_of_event ?? $item->created_at)->translatedFormat('d F Y') }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </section>
@endsection