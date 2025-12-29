@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
    <section class="bg-blue-600 py-20 text-white text-center">
        <h1 class="text-4xl font-bold mb-4">Hubungi Kami</h1>
        <p class="text-blue-100 max-w-2xl mx-auto px-4">Punya pertanyaan atau ingin berkolaborasi? Jangan ragu untuk menyapa kami!</p>
    </section>

    <section class="py-16 max-w-6xl mx-auto px-4">
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

                <div class="mt-10">
                    <h3 class="font-bold text-gray-800 mb-4">Ikuti Media Sosial Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Masukkan nama Anda">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="email@contoh.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                        <textarea name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Apa yang ingin Anda sampaikan?"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition">
                        Kirim Sekarang <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>

        </div>
    </section>
@endsection