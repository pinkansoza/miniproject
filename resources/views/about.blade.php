@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <section class="bg-slate-900 py-20 text-white relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang FMI</h1>
            <p class="text-blue-300 text-lg max-w-2xl mx-auto italic underline decoration-blue-500/50">"Membangun Sinergi Mahasiswa untuk Indonesia Raya"</p>
        </div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600/20 rounded-full -mr-32 -mt-32 blur-3xl"></div>
    </section>

    <section class="py-16 max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Siapa Kami?</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Forum Mahasiswa Indonesia (FMI) adalah organisasi independen yang menjadi wadah bagi mahasiswa di seluruh nusantara untuk bertukar pikiran, berkolaborasi, dan melakukan aksi nyata bagi masyarakat.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Didirikan dengan semangat kekeluargaan, kami percaya bahwa perubahan besar dimulai dari diskusi kecil yang diwujudkan dalam kerja keras dan dedikasi tinggi terhadap tanah air.
                </p>
            </div>
            <div class="bg-blue-100 rounded-2xl p-8 border-2 border-dashed border-blue-300">
                 <div class="text-blue-600 text-center">
                     <i class="fas fa-landmark text-6xl mb-4"></i>
                     <p class="font-medium">Berdiri Sejak 2024</p>
                     <p class="text-sm text-gray-500 italic mt-2">Diresmikan melalui kongres nasional pertama.</p>
                 </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 shadow-inner">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 italic">Visi & Misi</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="p-8 bg-blue-50 rounded-2xl border-l-8 border-blue-600">
                    <h3 class="text-2xl font-bold text-blue-800 mb-4">Visi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Menjadi organisasi mahasiswa terdepan dalam mencetak pemimpin masa depan yang berintegritas, inovatif, dan berjiwa sosial tinggi.
                    </p>
                </div>

                <div class="p-8 bg-slate-50 rounded-2xl border-l-8 border-slate-800">
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Misi</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Meningkatkan kualitas intelektual mahasiswa melalui program edukasi.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Menjalin kerjasama strategis dengan lembaga nasional maupun internasional.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mt-1 mr-3"></i>
                            <span class="text-gray-700">Menyelenggarakan kegiatan pengabdian masyarakat secara berkelanjutan.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection