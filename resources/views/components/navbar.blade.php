<nav class="sticky top-0 z-50 border-b border-slate-100 bg-white/80 backdrop-blur">
    <div class="container-max">
        <div class="flex h-16 items-center justify-between">
            {{-- Logo --}}
            <a class="flex items-center gap-2 text-xl font-extrabold" href="#beranda">
                <img class="ml-4 h-8" src="/images/services/logo2.png" alt="logo">
            </a>

            {{-- Desktop Menu --}}
            <nav class="hidden items-center gap-8 text-sm font-semibold text-slate-700 md:flex">
                <a href="#beranda" class="hover:text-slate-900">Beranda</a>
                <a href="#layanan" class="hover:text-slate-900">Layanan</a>
                <a href="#harga" class="hover:text-slate-900">Harga</a>
                <a href="#faq" class="hover:text-slate-900">FAQ</a>
            </nav>

            <a class="btn-primary mr-4 hidden md:inline-flex" href="#kontak">
                Mulai Konsultasi Gratis
            </a>

            {{-- Hamburger --}}
            <button id="mobile-menu-button" class="mr-4 rounded-lg p-2 text-gray-800 hover:bg-gray-100 md:hidden">
                <svg class="size-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                </svg>
            </button>
        </div>
    </div>
</nav>

{{-- Overlay --}}
<div id="mobile-overlay" class="fixed inset-0 z-40 hidden bg-white/40 backdrop-blur md:hidden"></div>

{{-- Side Mobile Menu --}}
<div id="mobile-menu"
    class="fixed right-0 top-0 z-50 h-full w-72 translate-x-full bg-white shadow-lg transition-transform duration-300 md:hidden">

    <div class="flex items-center justify-between border-b px-6 py-4 h-16">
        <span class="text-lg font-bold ml-2">Menu</span>
        <button id="close-mobile-menu">
            <svg class="size-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>
        </button>
    </div>

    <nav class="space-y-2 px-6 py-6 text-sm font-semibold text-slate-700">
        <a href="#beranda" class="block rounded-lg px-3 py-2 hover:bg-slate-100">Beranda</a>
        <a href="#layanan" class="block rounded-lg px-3 py-2 hover:bg-slate-100">Layanan</a>
        <a href="#harga" class="block rounded-lg px-3 py-2 hover:bg-slate-100">Harga</a>
        <a href="#faq" class="block rounded-lg px-3 py-2 hover:bg-slate-100">FAQ</a>

        <a href="#kontak"
            class="mt-4 inline-flex w-full items-center justify-center rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700">
            Mulai Konsultasi Gratis
        </a>
    </nav>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const openBtn = document.getElementById("mobile-menu-button");
        const closeBtn = document.getElementById("close-mobile-menu");
        const menu = document.getElementById("mobile-menu");
        const overlay = document.getElementById("mobile-overlay");

        function openMenu() {
            menu.classList.remove("translate-x-full");
            overlay.classList.remove("hidden");
        }

        function closeMenu() {
            menu.classList.add("translate-x-full");
            overlay.classList.add("hidden");
        }

        openBtn.addEventListener("click", openMenu);
        closeBtn.addEventListener("click", closeMenu);
        overlay.addEventListener("click", closeMenu);

        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                closeMenu();
            });
        });
    });
</script>
