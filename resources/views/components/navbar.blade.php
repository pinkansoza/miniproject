<nav class="bg-white shadow-lg sticky top-0 z-50" x-data="{ open: false }">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-blue-600 tracking-tight">FMI</a>
            </div>

            <div class="hidden md:flex space-x-8 font-medium text-gray-700">
                <a href="/" class="hover:text-blue-600 transition">Beranda</a>
                <a href="/tentang-kami" class="hover:text-blue-600 transition">Tentang Kami</a>
                <a href="/galeri" class="hover:text-blue-600 transition">Galeri</a>
                <a href="/kontak" class="hover:text-blue-600 transition">Kontak</a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="outline-none mobile-menu-button">
                    <i class="fa-solid fa-bars text-2xl text-gray-700"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="hidden mobile-menu md:hidden bg-white border-t">
        <ul class="flex flex-col">
            <li><a href="/" class="block text-sm px-6 py-4 hover:bg-blue-600 hover:text-white transition shadow-sm">Beranda</a></li>
            <li><a href="/tentang-kami" class="block text-sm px-6 py-4 hover:bg-blue-600 hover:text-white transition shadow-sm">Tentang Kami</a></li>
            <li><a href="/galeri" class="block text-sm px-6 py-4 hover:bg-blue-600 hover:text-white transition shadow-sm">Galeri</a></li>
            <li><a href="/kontak" class="block text-sm px-6 py-4 hover:bg-blue-600 hover:text-white transition shadow-sm">Kontak</a></li>
        </ul>
    </div>

    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>