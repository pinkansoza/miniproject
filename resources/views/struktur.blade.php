@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')

    <section class="py-16 max-w-6xl mx-auto px-4 bg-gray-50">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Kepengurusan FMI 2024</h2>
            <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
        </div>

        {{-- Bagan Sederhana --}}
        <div class="grid md:grid-cols-1 gap-8 mb-12">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 text-center max-w-sm mx-auto w-full">
                <div class="w-24 h-24 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <i class="fas fa-user-tie text-4xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800">Ketua Umum</h3>
                <p class="text-gray-500 italic">Nama Ketua Di Sini</p>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Departemen 1 --}}
            <div class="bg-white p-6 rounded-xl shadow-sm border-t-4 border-blue-600">
                <h4 class="font-bold text-lg text-gray-800 mb-4">Departemen Hujanmed</h4>
                <ul class="text-gray-600 space-y-2 text-sm">
                    <li><i class="fas fa-chevron-right text-blue-600 mr-2 text-xs"></i> <strong>CO:</strong> Nama Koordinator</li>
                    <li><i class="fas fa-circle text-[6px] mr-2 align-middle"></i> Nama Anggota 1</li>
                    <li><i class="fas fa-circle text-[6px] mr-2 align-middle"></i> Nama Anggota 2</li>
                </ul>
            </div>
            {{-- Tambahkan departemen lain di sini --}}
        </div>
    </section>
@endsection