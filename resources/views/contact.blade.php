@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
    <section class="bg-gray-50 py-10 text-white text-center">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 text-[#8AB4E3] drop-shadow-m">Hubungi Kami</h1>
        <p class="text-[#8AB4E3] max-w-2xl mx-auto px-6 text-sm md:text-base leading-relaxed drop-shadow-[0_1px_1px_rgba(0,0,0,0.1)]">Punya pertanyaan atau ingin berkolaborasi? Jangan ragu untuk menyapa kami!</p>
    </section>

    <section class="bg-white shadow-inner">
        <div class="py-16 max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
            
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg text-blue-600 mr-4">
                            <i class="fas fa-location-dot text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800">Sekretariat</h3>
                            <p class="text-gray-600">Jl. Mahasiswa Merdeka No. 45, Jakarta Selatan, Indonesia</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg text-blue-600 mr-4">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800">Email</h3>
                            <p class="text-gray-600">kontak@fmi.or.id</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg text-blue-600 mr-4">
                            <i class="fa-brands fa-whatsapp text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800">WhatsApp</h3>
                            <p class="text-gray-600">+62 812-3456-7890</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 px-4 py-3 rounded-lg mb-6">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="email@contoh.com" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                        <textarea name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Apa yang ingin Anda sampaikan?" required>{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition flex items-center justify-center">
                        Kirim Sekarang <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>

        </div>
    </section>
@endsection