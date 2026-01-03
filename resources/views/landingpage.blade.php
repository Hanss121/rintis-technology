@extends('layouts.app')

@section('content')
    {{-- NAVBAR --}}
    <header class="sticky top-0 z-50 border-b border-slate-100 bg-white/80 backdrop-blur">
        <div class="container-max">
            <div class="flex h-16 items-center justify-between">
                <a class="flex items-center gap-2 text-xl font-extrabold" href="#beranda">
                    <img class="ml-10 h-8" src="/images/services/logo2.png" alt="logo">
                </a>

                <nav class="hidden items-center gap-8 text-sm font-semibold text-slate-700 md:flex">
                    <a class="hover:text-slate-900" href="#beranda">Beranda</a>
                    <a class="hover:text-slate-900" href="#layanan">Layanan</a>
                    <a class="hover:text-slate-900" href="#harga">Harga</a>
                    <a class="hover:text-slate-900" href="#faq">FAQ</a>
                </nav>

                <a class="btn-primary mr-10 hidden md:inline-flex" href="#kontak">Mulai Konsultasi Gratis</a>
                <a class="btn-primary inline-flex px-4 py-2 md:hidden" href="#kontak">Konsultasi</a>
            </div>
        </div>
    </header>

    {{-- HERO --}}
    <section class="relative overflow-hidden" id="beranda">
        {{-- dekorasi --}}
        <div class="pointer-events-none absolute left-6 top-20 h-10 w-10 rotate-45 bg-emerald-500"></div>
        <div class="pointer-events-none absolute right-10 top-32 h-16 w-16 rotate-45 bg-rose-500"></div>
        <div class="pointer-events-none absolute bottom-10 left-0 h-20 w-20 rotate-45 bg-amber-400"></div>

        <div class="container-max py-16 md:py-20">
            <div class="mx-auto max-w-3xl text-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-emerald-400/70 px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    RinTech - RINTIS TECHNOLOGY DIGITAL
                </div>

                <p class="mt-4 text-sm font-medium text-slate-500">Build Smart. Grow Fast.</p>

                <h1 class="mt-5 text-4xl font-extrabold tracking-tight md:text-6xl">
                    Website & Aplikasi untuk Bisnis yang
                    <span class="text-orange-500">Mau Naik Kelas</span>
                </h1>

                <p class="mt-5 leading-relaxed text-slate-500">
                    Kami bantu Anda punya website company profile, landing page, hingga aplikasi mobile yang cepat, modern,
                    dan siap
                    dipakai jualan. Cocok untuk UMKM, usaha lokal, personal brand, sampai startup.
                </p>

                {{-- TRUST / QUICK STATS --}}
                <div class="mt-7 grid grid-cols-1 gap-3 sm:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-left shadow-sm">
                        <p class="text-xs font-semibold text-slate-500">Respon cepat</p>
                        <p class="mt-1 text-lg font-extrabold text-slate-900">≤ 1 Jam</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-left shadow-sm">
                        <p class="text-xs font-semibold text-slate-500">Garansi revisi</p>
                        <p class="mt-1 text-lg font-extrabold text-slate-900">Sesuai paket</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-left shadow-sm">
                        <p class="text-xs font-semibold text-slate-500">Support</p>
                        <p class="mt-1 text-lg font-extrabold text-slate-900">After launch</p>
                    </div>
                </div>

                <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a class="btn-primary w-full sm:w-auto" href="#kontak">
                        Konsultasi Gratis <span class="ml-2">→</span>
                    </a>
                    <a class="btn-secondary w-full sm:w-auto" href="#harga">
                        Lihat Paket & Harga
                    </a>
                </div>

                <p class="mt-4 text-xs text-slate-400">
                    Konsultasi gratis: kami bantu pilih solusi terbaik sesuai kebutuhan dan budget Anda.
                </p>
            </div>
        </div>
    </section>

    {{-- WHY US --}}
    <section class="bg-white py-14">
        <div class="container-max">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <p class="text-xs font-semibold text-slate-500">Hasil cepat & rapi</p>
                    <h3 class="mt-2 text-lg font-extrabold">Proses terstruktur</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-500">
                        Mulai dari brief, desain, development, sampai rilis. Anda dapat update progres dengan jelas.
                    </p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <p class="text-xs font-semibold text-slate-500">Siap untuk bisnis</p>
                    <h3 class="mt-2 text-lg font-extrabold">Tampilan modern</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-500">
                        Desain clean, responsif, dan mudah dipahami pelanggan. Cocok untuk branding dan konversi.
                    </p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <p class="text-xs font-semibold text-slate-500">Aman & stabil</p>
                    <h3 class="mt-2 text-lg font-extrabold">Performa & support</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-500">
                        Setup SSL, optimasi dasar, dan dukungan setelah rilis agar website tetap berjalan baik.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- LAYANAN --}}
    <section class="border-t border-slate-100 bg-slate-50 py-16" id="layanan">
        <div class="mx-auto max-w-6xl px-4">

            <div class="mb-12 text-center">
                <h2 class="text-3xl font-extrabold md:text-4xl">Layanan Kami</h2>
                <p class="mt-3 text-slate-500">
                    Solusi digital lengkap untuk pertumbuhan bisnis Anda
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">

                {{-- HOSTING --}}
                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/server.png" alt="server">
                    </div>
                    <h3 class="service-title">Hosting & Domain</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">
                        Mulai Rp200.000/tahun | Domain Gratis
                    </p>

                    <p class="service-desc">
                        Website Anda online dengan server cepat, aman, dan stabil.
                    </p>

                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            SSL & keamanan dasar
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            Setup awal dibantu tim
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            Support jika ada kendala
                        </li>
                    </ul>
                </div>

                {{-- WEB --}}
                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/responsive.png" alt="responsive">
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">
                        Landing page • Company profile • Website custom
                    </p>

                    <p class="service-desc">
                        Website profesional untuk branding dan meningkatkan kepercayaan pelanggan.
                    </p>

                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            Desain modern & responsif
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            Struktur SEO-friendly
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            Cepat, ringan, dan rapi
                        </li>
                    </ul>
                </div>

                {{-- MOBILE --}}
                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/interface.png" alt="interface">
                    </div>
                    <h3 class="service-title">Mobile Application</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">
                        Android • iOS • Integrasi API
                    </p>

                    <p class="service-desc">
                        Aplikasi untuk mempercepat operasional dan meningkatkan layanan customer.
                    </p>

                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            UI/UX rapi & mudah dipakai
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            Integrasi payment / API
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            Build & rilis dibantu
                        </li>
                    </ul>
                </div>

                {{-- IOT --}}
                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/iot.png" alt="IoT">
                    </div>
                    <h3 class="service-title">IoT Solution</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">
                        Monitoring • Automation • Integrasi perangkat
                    </p>

                    <p class="service-desc">
                        Solusi IoT untuk monitoring, automation, dan integrasi perangkat sesuai proyek.
                    </p>

                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            Sensor & dashboard monitoring
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            Integrasi jaringan & perangkat
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="mt-1 inline-block h-2 w-2 rounded-full bg-blue-600"></span>
                            Skema proyek fleksibel
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    {{-- PAKET HARGA (slider) --}}
    <section class="bg-slate-900 text-white" id="harga">
        <div class="container-max py-16" x-data="pricingSlider()">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold md:text-4xl">Paket Harga Website</h2>
                <p class="mt-3 text-white/70">
                    Pilih paket yang sesuai kebutuhan. Bisa request fitur tambahan sesuai proyek.
                </p>
            </div>

            {{-- NOTE --}}
            <div
                class="mx-auto mt-6 max-w-3xl rounded-2xl border border-white/10 bg-white/5 p-4 text-center text-sm text-white/70">
                Estimasi pengerjaan menyesuaikan paket dan kebutuhan konten. Tim kami bantu dari awal sampai website siap
                digunakan.
            </div>

            <div class="relative mt-10 px-4 py-10 md:px-12">
                <button
                    class="absolute -left-2 top-1/2 z-10 h-12 w-12 -translate-y-1/2 rounded-full bg-white text-slate-900 shadow transition hover:bg-slate-100 md:left-6"
                    type="button" @click="prev()">
                    ‹
                </button>

                <button
                    class="absolute -right-2 top-1/2 z-10 h-12 w-12 -translate-y-1/2 rounded-full bg-white text-lg text-slate-900 shadow transition hover:bg-slate-100 md:right-6"
                    type="button" @click="next()">
                    ›
                </button>

                <div class="grid grid-cols-1 items-stretch gap-6 md:grid-cols-3">
                    <template x-for="(p, idx) in visible()" :key="p.key">
                        <div class="relative flex h-full flex-col rounded-2xl border bg-white p-6 text-slate-900 transition-all duration-300"
                            :class="idx === 1 ? 'border-rose-400 shadow-xl md:scale-105' :
                                'border-slate-200 shadow-sm hover:shadow-lg'">

                            {{-- Badge --}}
                            <div class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-md px-5 py-2 text-sm font-extrabold text-white shadow"
                                :class="p.badgeClass" x-text="p.badge"></div>

                            <div class="h-6"></div>

                            {{-- Title + Tagline --}}
                            <div class="text-center">
                                <h3 class="text-xl font-extrabold tracking-tight" x-text="p.title"></h3>
                                <p class="mt-2 text-sm text-slate-500" x-text="p.tagline"></p>
                            </div>

                            {{-- Price --}}
                            <div class="mt-5">
                                <div class="inline-flex w-full items-center justify-center rounded-xl py-3 text-lg font-extrabold"
                                    :class="p.priceClass" x-text="p.price"></div>
                                <p class="mt-2 text-center text-xs text-slate-400">Harga sekali bayar • Termasuk setup awal
                                </p>
                            </div>

                            {{-- Divider --}}
                            <div class="my-6 h-px bg-slate-200"></div>

                            {{-- Features --}}
                            <ul class="flex-1 space-y-4 text-sm">
                                <template x-for="f in p.features" :key="f">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-0.5 inline-flex h-5 w-5 flex-shrink-0 items-center justify-center rounded-full border border-slate-200 text-emerald-600">✓</span>
                                        <span x-text="f"></span>
                                    </li>
                                </template>
                            </ul>

                            {{-- CTA --}}
                            <div class="mt-7">
                                <a class="inline-flex w-full items-center justify-center rounded-xl px-5 py-3 text-sm font-extrabold transition"
                                    href="#kontak"
                                    :class="idx === 1 ? 'bg-rose-600 text-white hover:bg-rose-700' :
                                        'bg-slate-900 text-white hover:bg-slate-800'">
                                    Pilih Paket Ini
                                </a>
                                <p class="mt-2 text-center text-xs text-slate-400">
                                    Konsultasi gratis untuk penyesuaian kebutuhan.
                                </p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            {{-- Guarantee strip --}}
            <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <p class="text-sm font-bold">Gratis konsultasi</p>
                    <p class="mt-1 text-sm text-white/70">Bantu mapping kebutuhan & rekomendasi paket.</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <p class="text-sm font-bold">Rapi & siap digunakan</p>
                    <p class="mt-1 text-sm text-white/70">Struktur jelas, responsif, dan mudah dikelola.</p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <p class="text-sm font-bold">Support after launch</p>
                    <p class="mt-1 text-sm text-white/70">Dibantu jika ada kendala setelah rilis.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="bg-white py-16" id="faq">
        <div class="container-max">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold md:text-4xl">FAQ</h2>
                <p class="mt-3 text-slate-500">Pertanyaan yang sering ditanyakan sebelum mulai</p>
            </div>

            <div class="mx-auto mt-10 grid max-w-4xl grid-cols-1 gap-4">
                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="font-extrabold">Apakah bisa request desain sesuai brand?</p>
                    <p class="mt-2 text-sm text-slate-500">
                        Bisa. Anda dapat kirim referensi desain/brand guideline. Tim kami sesuaikan tampilan agar konsisten
                        dengan identitas bisnis Anda.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="font-extrabold">Apakah saya perlu menyiapkan konten?</p>
                    <p class="mt-2 text-sm text-slate-500">
                        Jika sudah ada (logo, foto, profil bisnis) proses lebih cepat. Jika belum, kami bantu struktur
                        konten dan copywriting dasar.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="font-extrabold">Berapa lama pengerjaannya?</p>
                    <p class="mt-2 text-sm text-slate-500">
                        Tergantung paket dan kelengkapan konten. Setelah konsultasi, kami berikan estimasi timeline yang
                        jelas.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="font-extrabold">Kalau mau tambah fitur (form, WhatsApp, katalog, dll)?</p>
                    <p class="mt-2 text-sm text-slate-500">
                        Bisa. Kami bisa menambahkan fitur sesuai kebutuhan proyek, termasuk integrasi WhatsApp, form lead,
                        katalog produk, dan lainnya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA + FOOTER --}}
    <section class="bg-gradient-to-b from-slate-900 to-slate-800 text-white" id="kontak">
        <div class="container-max py-16 text-center">
            <h2 class="text-3xl font-extrabold md:text-4xl">
                Siap Membawa Bisnis Anda ke
                <span class="text-rose-500">Level</span>
                <span class="text-lime-400">Berikutnya?</span>
            </h2>

            <p class="mx-auto mt-4 max-w-3xl text-white/75">
                Konsultasikan kebutuhan digital Anda dengan tim kami. Gratis, tanpa komitmen, dan solusi yang disesuaikan
                untuk bisnis Anda.
            </p>

            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                <a class="btn-primary w-full sm:w-auto"
                    href="https://wa.me/6282243143115?text=Halo%20RinTech,%20saya%20ingin%20konsultasi%20website%2Faplikasi."
                    target="_blank" rel="noopener">
                    Konsultasi via WhatsApp
                </a>

                <a class="inline-flex w-full items-center justify-center rounded-full border border-white/30 bg-white/10 px-8 py-3 text-sm font-semibold text-white transition hover:bg-white/15 sm:w-auto"
                    href="mailto:rintechdigital@gmail.com">
                    Email Kami
                </a>
            </div>

            <p class="mt-4 text-xs text-white/60">
                Jam layanan: 08.00–21.00 WIB • Estimasi respon ≤ 1 jam (hari kerja)
            </p>

            <div class="mt-12 h-px bg-white/15"></div>
        </div>

        <footer class="container-max pb-10">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-3">
                <div>
                    <div class="flex items-center gap-2 text-xl font-extrabold">
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white text-slate-900">Ri</span>
                        <span>RinTech</span>
                    </div>
                    <p class="mt-3 text-white/70">
                        Merintis solusi digital yang siap tumbuh bersama bisnis Anda.
                    </p>
                </div>

                <div>
                    <h4 class="font-extrabold">Layanan</h4>
                    <ul class="mt-4 space-y-2 text-sm text-white/75">
                        <li>Hosting &amp; Domain</li>
                        <li>Web Development</li>
                        <li>Mobile Application</li>
                        <li>IoT Solutions</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-extrabold">Kontak</h4>
                    <ul class="mt-4 space-y-2 text-sm text-white/75">
                        <li>rintechdigital@gmail.com</li>
                        <li>082 243 143 115</li>
                        <li>Banyumeneng, Mranggen, Demak 59567</li>
                    </ul>
                </div>
            </div>

            <div class="mt-10 text-center text-xs text-white/60">
                © 2024 RinTech - Rintis Technology. All rights reserved.
            </div>
        </footer>
    </section>

    {{-- Alpine: slider pricing --}}
    <script>
        function pricingSlider() {
            const packs = [{
                    key: 'p4',
                    badge: 'Paket 4',
                    title: 'Full Custom Website',
                    tagline: 'Untuk bisnis yang butuh fitur lebih kompleks dan fleksibel.',
                    badgeClass: 'bg-emerald-500',
                    price: 'Rp 1.000.000',
                    priceClass: 'bg-emerald-500 text-white',
                    features: [
                        'Landing Page + Company Profile',
                        'Website Full Custom sesuai kebutuhan',
                        'Hosting 1 tahun',
                        'Domain Gratis',
                        'SSL Certificate',
                        'Tampilan modern & fleksibel',
                        'Struktur SEO-friendly',
                    ],
                },
                {
                    key: 'p1',
                    badge: 'Paket 1',
                    title: 'Starter Website',
                    tagline: 'Cocok untuk mulai online cepat dengan budget hemat.',
                    badgeClass: 'bg-rose-500',
                    price: 'Rp 300.000',
                    priceClass: 'bg-rose-600 text-white',
                    features: [
                        'Landing Page / Company Profile',
                        'Hosting 1 tahun',
                        'Domain Gratis',
                        '3 Pilihan Template',
                        'SSL Certificate',
                        'Revisi desain (sesuai paket)',
                        'Website sederhana & profesional',
                    ],
                },
                {
                    key: 'p2',
                    badge: 'Paket 2',
                    title: 'Business Website',
                    tagline: 'Lebih modern, lebih fleksibel, siap untuk branding.',
                    badgeClass: 'bg-amber-400 text-slate-900',
                    price: 'Rp 500.000',
                    priceClass: 'bg-amber-400 text-white',
                    features: [
                        'Landing Page / Company Profile',
                        'Pilihan template lebih banyak',
                        'Hosting 1 tahun',
                        'Domain Gratis',
                        'SSL Certificate',
                        'Tampilan lebih modern & fleksibel',
                        'Optimasi performa dasar',
                    ],
                },
            ];

            return {
                i: 1,
                items: packs,
                visible() {
                    const n = this.items.length;
                    const left = (this.i - 1 + n) % n;
                    const mid = this.i;
                    const right = (this.i + 1) % n;
                    return [this.items[left], this.items[mid], this.items[right]];
                },
                next() {
                    this.i = (this.i + 1) % this.items.length;
                },
                prev() {
                    this.i = (this.i - 1 + this.items.length) % this.items.length;
                },
            }
        }
    </script>
@endsection
