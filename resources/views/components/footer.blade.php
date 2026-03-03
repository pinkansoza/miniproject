<footer class="bg-[#9db2ce] text-white pt-10 pb-6"> 
    <div class="max-w-6xl mx-auto px-6 sm:px-12 lg:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center"> 
            
            {{-- Bagian Kiri: Sosmed Sejajar Berempat --}}
            <div class="flex flex-col items-center md:items-start space-y-4">
                <h3 class="font-semibold uppercase tracking-[0.2em] text-[10px] md:text-xs opacity-80">CONNECTED WITH US</h3>
                
                {{-- Flex row untuk berjejer 4 horizontal --}}
                <div class="flex items-center gap-4">
                    <a href="https://www.instagram.com/fmiunnes" target="_blank" title="Instagram" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 hover:-translate-y-1 transition-all duration-300">
                        <i class="fab fa-instagram text-l md:text-xl"></i>
                    </a>

                    <a href="https://www.tiktok.com/@fmiunnes" target="_blank" title="TikTok" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 hover:-translate-y-1 transition-all duration-300">
                        <i class="fab fa-tiktok text-l md:text-xl"></i>
                    </a>

                    <a href="https://www.linkedin.com/company/fmi-fmipa-unnes" target="_blank" title="LinkedIn" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 hover:-translate-y-1 transition-all duration-300">
                        <i class="fab fa-linkedin text-l md:text-xl"></i>
                    </a>

                    <a href="https://www.youtube.com/@fmifmipaunnes3415" target="_blank" title="YouTube" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 hover:-translate-y-1 transition-all duration-300">
                        <i class="fab fa-youtube text-l md:text-xl"></i>
                    </a>
                </div>
            </div>

            {{-- Bagian Kanan: Alamat & Logo --}}
            <div class="text-center md:text-right space-y-4 mt-0 md:mt-0">
                <div class="flex items-center justify-center md:justify-end gap-3">
                    <span class="font-bold text-base md:text-lg tracking-tight">FMI FMIPA UNNES</span>
                    <img src="{{ asset('images/Logo FMI putih.png') }}" alt="Logo" class="h-8 md:h-9 w-auto"> 
                </div>
                <div class="text-[13px] md:text-sm leading-relaxed opacity-90 font-sans"> 
                    <p>Mushola Baitul Alim FMIPA, Kampus Sekaran</p>
                    <p>Universitas Negeri Semarang, Gunungpati, Kota Semarang</p>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="mt-10 text-center border-t border-white/20 pt-5"> 
            <p class="text-[10px] md:text-xs font-medium tracking-widest opacity-60 uppercase">
                © 2026 Departmen Hujanmed FMI UNNES. All rights reserved.
            </p>
        </div>
    </div>
</footer>