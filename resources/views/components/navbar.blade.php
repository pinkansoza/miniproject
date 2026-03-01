<nav class="bg-white shadow-md sticky top-0 z-50 font-sans h-20" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full">
        <div class="flex justify-between items-center h-full">
            
            {{-- Logo --}}
            <div class="flex items-center">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/Logo FMI putih.png') }}" alt="Logo" class="h-9 w-auto filter brightness-0 transition-transform duration-300 group-hover:scale-105">
                    <span class="text-sm md:text-xl font-semibold text-gray-700 tracking-tight group-hover:text-[#8AB4E3] transition-colors">
                        FMI FMIPA UNNES
                    </span>
                </a>
            </div>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center space-x-2 font-medium text-gray-700 h-full">
                {{-- Beranda --}}
                <a href="/" class="relative px-4 flex items-center h-full hover:text-[#8AB4E3] transition-all duration-300 group {{ request()->is('/') ? 'text-[#8AB4E3]' : '' }}">
                    Beranda
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-[#8AB4E3] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-t-full {{ request()->is('/') ? 'scale-x-100' : '' }}"></span>
                </a>
                
                {{-- Dropdown Tentang Kami --}}
                <div class="relative h-full" 
                    x-data="{ dropdown: false }" 
                    @mouseenter="dropdown = true" 
                    @mouseleave="dropdown = false">
    
                    <button class="flex items-center gap-1 px-4 h-full hover:text-[#8AB4E3] transition-all duration-300 focus:outline-none group {{ request()->is('tentang-fmiunnes*', 'struktur*', 'lembaga-dakwah-jurusan*') ? 'text-[#8AB4E3]' : '' }}">
                        <span>Tentang Kami</span>
                        <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-300" :class="dropdown ? 'rotate-180' : ''"></i>
                        <span class="absolute bottom-0 left-0 w-full h-1 bg-[#8AB4E3] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-t-full {{ request()->is('tentang-fmiunnes*', 'struktur*', 'lembaga-dakwah-jurusan*') ? 'scale-x-100' : '' }}"></span>
                    </button>
                    
                    <div x-show="dropdown" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="absolute left-0 mt-0 w-56 bg-white shadow-2xl border border-gray-100 rounded-b-xl py-3 z-50 overflow-hidden"
                        style="display: none;">
                        
                        <a href="/tentang-fmiunnes" class="block px-6 py-3 text-sm hover:bg-blue-50 hover:text-[#8AB4E3] transition-all duration-300 {{ request()->is('tentang-fmiunnes') ? 'bg-blue-50 text-[#8AB4E3] border-l-4 border-[#8AB4E3]' : '' }}">
                            Tentang FMIUNNES
                        </a>
                        
                        <a href="/struktur" class="block px-6 py-3 text-sm hover:bg-blue-50 hover:text-[#8AB4E3] transition-all duration-300 {{ request()->is('struktur') ? 'bg-blue-50 text-[#8AB4E3] border-l-4 border-[#8AB4E3]' : '' }}">
                            Susunan Pengurus
                        </a>

                        <a href="/lembaga-dakwah-jurusan" class="block px-6 py-3 text-sm hover:bg-blue-50 hover:text-[#8AB4E3] transition-all duration-300 {{ request()->is('lembaga-dakwah-jurusan') ? 'bg-blue-50 text-[#8AB4E3] border-l-4 border-[#8AB4E3]' : '' }}">
                            Kenali LDJ FMIPA
                        </a>
                    </div>
                </div>

                {{-- Galeri --}}
                <a href="/galeri" class="relative px-4 flex items-center h-full hover:text-[#8AB4E3] transition-all duration-300 group {{ request()->is('galeri*') ? 'text-[#8AB4E3]' : '' }}">
                    Galeri
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-[#8AB4E3] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-t-full {{ request()->is('galeri*') ? 'scale-x-100' : '' }}"></span>
                </a>

                {{-- Kontak --}}
                <a href="/kontak" class="relative px-4 flex items-center h-full hover:text-[#8AB4E3] transition-all duration-300 group {{ request()->is('kontak*') ? 'text-[#8AB4E3]' : '' }}">
                    Kontak
                    <span class="absolute bottom-0 left-0 w-full h-1 bg-[#8AB4E3] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-t-full {{ request()->is('kontak*') ? 'scale-x-100' : '' }}"></span>
                </a>
            </div>

            {{-- Mobile Toggle --}}
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-gray-700 p-2 focus:outline-none">
                    <i class="fa-solid transition-all duration-300" :class="open ? 'fa-xmark rotate-90 text-[#8AB4E3]' : 'fa-bars'" style="font-size: 24px;"></i>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-10"
         x-transition:enter-end="opacity-100 translate-y-0"
         style="display: none;" 
         class="md:hidden bg-white border-t border-gray-100 shadow-2xl relative z-40">
        <ul class="flex flex-col py-4 font-medium">
            <li><a href="/" class="block px-8 py-4 hover:bg-blue-50 hover:text-[#8AB4E3] {{ request()->is('/') ? 'text-[#8AB4E3] bg-blue-50 border-l-4 border-[#8AB4E3]' : '' }}">Beranda</a></li>
            <li class="bg-gray-50/50 px-8 py-2 text-xs font-bold text-gray-400 uppercase tracking-widest">Tentang Kami</li>
            <li><a href="/tentang-fmiunnes" class="block px-12 py-3 text-sm hover:bg-blue-50 hover:text-[#8AB4E3] {{ request()->is('tentang-fmiunnes') ? 'text-[#8AB4E3] border-l-4 border-[#8AB4E3]' : '' }}">Tentang FMIUNNES</a></li>
            <li><a href="/struktur" class="block px-12 py-3 text-sm hover:bg-blue-50 hover:text-[#8AB4E3] {{ request()->is('struktur') ? 'text-[#8AB4E3] border-l-4 border-[#8AB4E3]' : '' }}">Susunan Pengurus</a></li>
            <li><a href="/lembaga-dakwah-jurusan" class="block px-12 py-3 text-sm hover:bg-blue-50 hover:text-[#8AB4E3] {{ request()->is('lembaga-dakwah-jurusan') ? 'text-[#8AB4E3] border-l-4 border-[#8AB4E3]' : '' }}">Kenali LDJ FMIPA</a></li>
            <li><a href="/galeri" class="block px-8 py-4 hover:bg-blue-50 hover:text-[#8AB4E3] {{ request()->is('galeri') ? 'text-[#8AB4E3] bg-blue-50 border-l-4 border-[#8AB4E3]' : '' }}">Galeri</a></li>
            <li><a href="/kontak" class="block px-8 py-4 hover:bg-blue-50 hover:text-[#8AB4E3] {{ request()->is('kontak') ? 'text-[#8AB4E3] bg-blue-50 border-l-4 border-[#8AB4E3]' : '' }}">Kontak</a></li>
        </ul>
    </div>
</nav>