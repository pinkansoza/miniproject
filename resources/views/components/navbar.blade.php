<nav class="bg-white shadow-md sticky top-0 z-50 font-sans" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            {{-- Logo --}}
            <div class="flex items-center">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/Logo FMI putih.png') }}" alt="Logo" class="h-9 w-auto filter brightness-0 transition-transform duration-300 group-hover:scale-105">
                    <span class="text-sm md:text-xl font-semibold text-gray-700 tracking-tight group-hover:text-blue-600 transition-colors">
                        FMI FMIPA UNNES
                    </span>
                </a>
            </div>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center space-x-2 font-medium text-gray-700">
                {{-- Beranda --}}
                <a href="/" class="relative px-4 py-2 hover:text-blue-600 transition-all duration-300 group {{ request()->is('/') ? 'text-blue-600' : '' }}">
                    Beranda
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->is('/') ? 'scale-x-100' : '' }}"></span>
                </a>
                
                {{-- Dropdown Tentang Kami --}}
                <div class="relative" 
                    x-data="{ dropdown: false }" 
                    @mouseenter="dropdown = true" 
                    @mouseleave="dropdown = false">
    
                    <button class="flex items-center gap-1 px-4 py-2 hover:text-blue-600 transition-all duration-300 focus:outline-none group {{ request()->is('tentang-fmiunnes*', 'struktur*', 'lembaga-dakwah-jurusan*') ? 'text-blue-600' : '' }}">
                        <span>Tentang Kami</span>
                        <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-300" :class="dropdown ? 'rotate-180' : ''"></i>
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->is('tentang-fmiunnes*', 'struktur*', 'lembaga-dakwah-jurusan*') ? 'scale-x-100' : '' }}"></span>
                    </button>
                    
                    <div x-show="dropdown" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4"
                        class="absolute left-0 mt-0 w-56 bg-white shadow-2xl border border-gray-100 rounded-xl py-3 z-50 overflow-hidden"
                        style="display: none;">
                        
                        <a href="/tentang-fmiunnes" class="block px-6 py-3 text-sm hover:bg-blue-50 hover:text-blue-600 transition-all duration-300 {{ request()->is('tentang-fmiunnes') ? 'bg-blue-50 text-blue-600 border-l-4 border-blue-600' : '' }}">
                            Tentang FMIUNNES
                        </a>
                        
                        <a href="/struktur" class="block px-6 py-3 text-sm hover:bg-blue-50 hover:text-blue-600 transition-all duration-300 {{ request()->is('struktur') ? 'bg-blue-50 text-blue-600 border-l-4 border-blue-600' : '' }}">
                            Susunan Pengurus
                        </a>

                        <a href="/lembaga-dakwah-jurusan" class="block px-6 py-3 text-sm hover:bg-blue-50 hover:text-blue-600 transition-all duration-300 {{ request()->is('lembaga-dakwah-jurusan') ? 'bg-blue-50 text-blue-600 border-l-4 border-blue-600' : '' }}">
                            Kenali LDJ FMIPA
                        </a>
                    </div>
                </div>

                {{-- Galeri --}}
                <a href="/galeri" class="relative px-4 py-2 hover:text-blue-600 transition-all duration-300 group {{ request()->is('galeri*') ? 'text-blue-600' : '' }}">
                    Galeri
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->is('galeri*') ? 'scale-x-100' : '' }}"></span>
                </a>

                {{-- Kontak --}}
                <a href="/kontak" class="relative px-4 py-2 hover:text-blue-600 transition-all duration-300 group {{ request()->is('kontak*') ? 'text-blue-600' : '' }}">
                    Kontak
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->is('kontak*') ? 'scale-x-100' : '' }}"></span>
                </a>
            </div>

            {{-- Mobile Toggle --}}
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-gray-700 p-2 focus:outline-none transition-transform active:scale-90">
                    <i class="fa-solid transition-all duration-300" :class="open ? 'fa-xmark rotate-90 text-blue-600' : 'fa-bars'" style="font-size: 24px;"></i>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-10"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-10"
         style="display: none;" 
         class="md:hidden bg-white border-t border-gray-100 shadow-2xl relative z-40">
        <ul class="flex flex-col py-4 font-medium">
            <li><a href="/" class="block px-8 py-4 hover:bg-blue-50 hover:text-blue-600 {{ request()->is('/') ? 'text-blue-600 bg-blue-50 border-l-4 border-blue-600' : '' }}">Beranda</a></li>
            <li class="bg-gray-50/50 px-8 py-2 text-xs font-bold text-gray-400 uppercase tracking-widest">Tentang Kami</li>
            <li><a href="/tentang-fmiunnes" class="block px-12 py-3 text-sm hover:bg-blue-50 hover:text-blue-600 {{ request()->is('tentang-fmiunnes') ? 'text-blue-600 border-l-4 border-blue-600' : '' }}">Tentang FMIUNNES</a></li>
            <li><a href="/struktur" class="block px-12 py-3 text-sm hover:bg-blue-50 hover:text-blue-600 {{ request()->is('struktur') ? 'text-blue-600 border-l-4 border-blue-600' : '' }}">Susunan Pengurus</a></li>
            <li><a href="/lembaga-dakwah-jurusan" class="block px-12 py-3 text-sm hover:bg-blue-50 hover:text-blue-600 {{ request()->is('lembaga-dakwah-jurusan') ? 'text-blue-600 border-l-4 border-blue-600' : '' }}">Kenali LDJ FMIPA</a></li>
            <li><a href="/galeri" class="block px-8 py-4 hover:bg-blue-50 hover:text-blue-600 {{ request()->is('galeri') ? 'text-blue-600 bg-blue-50 border-l-4 border-blue-600' : '' }}">Galeri</a></li>
            <li><a href="/kontak" class="block px-8 py-4 hover:bg-blue-50 hover:text-blue-600 {{ request()->is('kontak') ? 'text-blue-600 bg-blue-50 border-l-4 border-blue-600' : '' }}">Kontak</a></li>
        </ul>
    </div>
</nav>