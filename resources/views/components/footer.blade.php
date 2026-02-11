<footer class="bg-[#9db2ce] text-white pt-12 pb-8">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            
            {{-- Bagian Kiri: Sosmed --}}
            <div class="space-y-4">
                <h3 class="font-semibold uppercase tracking-widest text-sm mb-6">CONNECTED WITH US</h3>
                <div class="space-y-4">
                    <a href="#" class="flex items-center gap-3 hover:opacity-80 transition">
                        <i class="fab fa-instagram text-2xl"></i>
                        <span class="text-lg">@fmiunnes</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 hover:opacity-80 transition">
                        <i class="fab fa-tiktok text-2xl"></i>
                        <span class="text-lg">@fmiunnes</span>
                    </a>
                    <div class="flex items-center gap-3">
                        <i class="far fa-envelope text-2xl"></i>
                        <span class="text-lg">fmipaunnesfmi@gmail.com</span>
                    </div>
                </div>
            </div>

            {{-- Bagian Kanan: Alamat & Logo --}}
            <div class="md:text-right space-y-4">
                <div class="flex items-center md:justify-end gap-3 mb-6">
                    <span class="font-bold text-xl tracking-tight">FMI FMIPA UNNES</span>
                    <img src="{{ asset('images/Logo FMI putih.png') }}" alt="Logo" class="h-14 w-auto drop-shadow-md">
                </div>
                <div class="text-sm leading-relaxed space-y-1 opacity-90">
                    <p>Mushola Baitul Alim FMIPA, Kampus Sekaran</p>
                    <p>Universitas Negeri Semarang, Gunungpati, Kota</p>
                    <p>Semarang, Jawa Tengah 50229</p>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="mt-16 text-center border-t border-white/20 pt-8">
            <p class="text-sm font-medium tracking-wide">
                © 2026 Departemen Hujanmed FMI UNNES. All rights reserved.
            </p>
        </div>
    </div>
</footer>