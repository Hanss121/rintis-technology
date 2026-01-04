@extends('layouts.app')

@section('content')
    {{-- NAVBAR --}}
    <header class="sticky top-0 z-50 border-b border-slate-100 bg-white/80 backdrop-blur">
        <div class="container-max">
            <div class="flex h-16 items-center justify-between">
                <a class="flex items-center gap-2 text-xl font-extrabold" href="#beranda">
                    <img class="ml-0 h-8 md:ml-10" src="/images/services/logo2.png" alt="logo">
                </a>

                <nav class="hidden items-center gap-8 text-sm font-semibold text-slate-700 md:flex">
                    <a class="hover:text-slate-900" href="#beranda">Beranda</a>
                    <a class="hover:text-slate-900" href="#layanan">Layanan</a>
                    <a class="hover:text-slate-900" href="#cara-kerja">Cara Kerja</a>
                    <a class="hover:text-slate-900" href="#harga">Harga</a>
                    <a class="hover:text-slate-900" href="#portofolio">Portofolio</a>
                    <a class="hover:text-slate-900" href="#faq">FAQ</a>
                </nav>

                <div class="hidden items-center gap-3 md:flex">
                    <a class="btn-secondary" href="#harga">Lihat Harga</a>
                    <a class="btn-primary" href="#kontak">Konsultasi Gratis</a>
                </div>

                <div class="flex items-center gap-2 md:hidden">
                    <a class="btn-secondary btn-sm" href="#harga">Harga</a>
                    <a class="btn-primary btn-sm" href="#kontak">Konsultasi</a>
                </div>
            </div>
        </div>
    </header>

    {{-- HERO --}}
    <section class="relative overflow-hidden" id="beranda">
        {{-- decor --}}
        <div class="pointer-events-none absolute left-6 top-20 h-10 w-10 rotate-45 bg-emerald-500"></div>
        <div class="pointer-events-none absolute right-10 top-32 h-16 w-16 rotate-45 bg-rose-500"></div>
        <div class="pointer-events-none absolute bottom-10 left-0 h-20 w-20 rotate-45 bg-amber-400"></div>

        <div class="container-max py-16 md:py-20">
            <div class="mx-auto max-w-4xl text-center">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-emerald-400/70 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    RinTech - RINTIS TECHNOLOGY DIGITAL
                </div>

                <p class="mt-4 text-sm font-medium text-slate-500">Build Smart. Grow Fast.</p>

                <h1 class="mt-5 text-4xl font-extrabold tracking-tight md:text-6xl">
                    Website, Aplikasi & IT Solution
                    <span class="text-orange-500">untuk Bisnis yang Naik Kelas</span>
                </h1>

                <p class="mt-5 leading-relaxed text-slate-500">
                    Kami bantu Anda punya website company profile, landing page, hingga web app & mobile app yang cepat,
                    modern,
                    dan siap digunakan. Termasuk hosting + domain, manajemen jaringan, server, dan solusi IoT sesuai proyek.
                </p>

                {{-- Trust cards --}}
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

                {{-- Audience --}}
                <div
                    class="mx-auto mt-10 flex max-w-3xl flex-col items-center justify-center gap-3 rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm text-slate-600 shadow-sm sm:flex-row">
                    <span class="font-semibold text-slate-800">Cocok untuk:</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1">UMKM</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1">Sekolah</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1">Bisnis Lokal</span>
                    <span class="rounded-full bg-slate-100 px-3 py-1">Startup</span>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY US --}}
    <section class="bg-white py-14">
        <div class="container-max">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <p class="text-xs font-semibold text-slate-500">Hasil cepat & rapi</p>
                    <h3 class="mt-2 text-lg font-extrabold text-slate-900">Proses terstruktur</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-500">
                        Mulai dari brief, desain, development, sampai rilis. Anda dapat update progres dengan jelas.
                    </p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <p class="text-xs font-semibold text-slate-500">Siap untuk bisnis</p>
                    <h3 class="mt-2 text-lg font-extrabold text-slate-900">Tampilan modern</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-500">
                        Desain clean, responsif, dan mudah dipahami pelanggan. Cocok untuk branding dan konversi.
                    </p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <p class="text-xs font-semibold text-slate-500">Aman & stabil</p>
                    <h3 class="mt-2 text-lg font-extrabold text-slate-900">Performa & support</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-500">
                        Setup SSL, optimasi dasar, dan dukungan setelah rilis agar website tetap berjalan baik.
                    </p>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-4">
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm font-extrabold text-slate-900">Dokumentasi & handover</p>
                    <p class="mt-2 text-sm text-slate-500">Akses admin, panduan singkat, dan serah terima jelas.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm font-extrabold text-slate-900">Skalabel</p>
                    <p class="mt-2 text-sm text-slate-500">Bisa upgrade dari website ke web app/mobile app saat bisnis
                        tumbuh.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm font-extrabold text-slate-900">Optimasi dasar</p>
                    <p class="mt-2 text-sm text-slate-500">Kecepatan, mobile-friendly, struktur SEO-friendly.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                    <p class="text-sm font-extrabold text-slate-900">Support after launch</p>
                    <p class="mt-2 text-sm text-slate-500">Perbaikan bug minor dan pendampingan awal.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- LAYANAN --}}
    <section class="border-t border-slate-100 bg-slate-50 py-16" id="layanan">
        <div class="container-max">
            <div class="mb-12 text-center">
                <h2 class="section-title">Layanan Kami</h2>
                <p class="section-subtitle">Solusi digital lengkap untuk pertumbuhan bisnis Anda.</p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">

                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/server.png" alt="server">
                    </div>
                    <h3 class="service-title">Hosting & Domain</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">Rp200.000/tahun • Domain Gratis</p>
                    <p class="service-desc">Website Anda online dengan server cepat, aman, dan stabil.</p>
                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            SSL & keamanan dasar</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Setup awal dibantu</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Support jika ada kendala</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/responsive.png" alt="website">
                    </div>
                    <h3 class="service-title">Website Development</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">Landing Page • Company Profile • Custom</p>
                    <p class="service-desc">Website profesional untuk branding dan meningkatkan kepercayaan pelanggan.</p>
                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Desain modern & responsif</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Struktur SEO-friendly</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Cepat, ringan, rapi</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/interface.png" alt="webapp">
                    </div>
                    <h3 class="service-title">Web Aplikasi</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">Rp3.000.000 – Rp5.000.000 (by scope)</p>
                    <p class="service-desc">Sistem web untuk kasir, stok, absensi, sekolah, dan administrasi bisnis.</p>
                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Login multi user & role</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Dashboard & laporan</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Database aman</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/interface.png" alt="mobile">
                    </div>
                    <h3 class="service-title">Mobile App (Android)</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">Rp1.000.000 – Rp5.000.000</p>
                    <p class="service-desc">Aplikasi untuk operasional dan layanan customer (booking, kasir, internal).</p>
                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            UI/UX mudah dipakai</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Integrasi API / WhatsApp</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Build & rilis dibantu</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/iot.png" alt="iot">
                    </div>
                    <h3 class="service-title">Sistem IoT</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">Monitoring • Automation • Integrasi perangkat</p>
                    <p class="service-desc">Dashboard monitoring dan integrasi sensor sesuai kebutuhan proyek.</p>
                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Sensor + dashboard</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Notifikasi/alert</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Skema fleksibel</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/server.png" alt="network">
                    </div>
                    <h3 class="service-title">Manajemen Jaringan</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">Setup • Maintenance • Optimasi</p>
                    <p class="service-desc">Pengaturan jaringan kantor/sekolah agar stabil, aman, dan rapi.</p>
                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            LAN/WiFi/Router</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Troubleshooting</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Optimasi stabilitas</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/server.png" alt="server">
                    </div>
                    <h3 class="service-title">Pembuatan Server</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">Offline/Online • Cloud/Lokal</p>
                    <p class="service-desc">Setup server sesuai kebutuhan: file server, backup, aplikasi internal.</p>
                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Konfigurasi & hardening</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Backup & restore plan</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Dokumentasi</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="icon-wrap">
                        <img class="service-icon" src="/images/services/interface.png" alt="support">
                    </div>
                    <h3 class="service-title">Maintenance & Support</h3>
                    <p class="mt-1 text-xs font-semibold text-slate-400">Update • Perbaikan • Pendampingan</p>
                    <p class="service-desc">Agar website/aplikasi selalu aman, update, dan berjalan stabil.</p>
                    <ul class="mt-4 w-full space-y-2 text-left text-sm text-slate-600">
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Bug fix minor</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            Monitoring dasar</li>
                        <li class="flex items-start gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-emerald-600"></span>
                            SLA fleksibel</li>
                    </ul>
                </div>

            </div>

            {{-- CTA --}}
            <div class="mt-10 rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                <p class="text-lg font-extrabold text-slate-900">Butuh solusi khusus untuk sekolah/UMKM?</p>
                <p class="mt-2 text-sm text-slate-500">
                    Ceritakan kebutuhan Anda. Kami bantu rekomendasikan paket terbaik sesuai budget.
                </p>
                <div class="mt-4 flex flex-col justify-center gap-3 sm:flex-row">
                    <a class="btn-primary w-full sm:w-auto" href="#kontak">Konsultasi Gratis</a>
                    <a class="btn-secondary w-full sm:w-auto" href="#harga">Lihat Harga</a>
                </div>
            </div>
        </div>
    </section>

    {{-- CARA KERJA --}}
    <section class="bg-white py-16" id="cara-kerja">
        <div class="container-max">
            <div class="text-center">
                <h2 class="section-title">Cara Kerja</h2>
                <p class="section-subtitle">Proses simpel, jelas, dan terukur dari awal sampai rilis.</p>
            </div>

            <div class="mx-auto mt-10 grid max-w-6xl grid-cols-1 gap-6 md:grid-cols-4">
                <div class="rounded-2xl border border-slate-200 p-6">
                    <span class="badge">Step 01</span>
                    <p class="mt-3 text-lg font-extrabold text-slate-900">Brief & kebutuhan</p>
                    <p class="mt-2 text-sm text-slate-500">Diskusi tujuan, target user, fitur, dan referensi desain.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 p-6">
                    <span class="badge">Step 02</span>
                    <p class="mt-3 text-lg font-extrabold text-slate-900">Desain & struktur</p>
                    <p class="mt-2 text-sm text-slate-500">Susun layout, konten, dan alur. Revisi sesuai paket.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 p-6">
                    <span class="badge">Step 03</span>
                    <p class="mt-3 text-lg font-extrabold text-slate-900">Development</p>
                    <p class="mt-2 text-sm text-slate-500">Implementasi, optimasi performa, dan testing.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 p-6">
                    <span class="badge">Step 04</span>
                    <p class="mt-3 text-lg font-extrabold text-slate-900">Rilis & support</p>
                    <p class="mt-2 text-sm text-slate-500">Deploy, setup domain/hosting, handover, support after launch.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- HARGA --}}
    <section class="bg-slate-900 text-white" id="harga" x-data="pricingSlider()">
        <div class="container-max py-16">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold md:text-4xl">Paket Harga Website</h2>
                <p class="mt-3 text-white/70">Pilih paket sesuai kebutuhan. Bisa tambah fitur sesuai proyek.</p>
            </div>

            <div
                class="mx-auto mt-6 max-w-3xl rounded-2xl border border-white/10 bg-white/5 p-4 text-center text-sm text-white/70">
                Estimasi pengerjaan menyesuaikan paket & konten. Kami bantu dari awal sampai website siap digunakan.
            </div>

            <div class="relative mt-10 px-4 py-10 md:px-12">
                <button
                    class="absolute -left-2 top-1/2 z-10 h-12 w-12 -translate-y-1/2 rounded-full bg-white text-slate-900 shadow transition hover:bg-slate-100 md:left-6"
                    type="button" @click="prev()">‹</button>

                <button
                    class="absolute -right-2 top-1/2 z-10 h-12 w-12 -translate-y-1/2 rounded-full bg-white text-lg text-slate-900 shadow transition hover:bg-slate-100 md:right-6"
                    type="button" @click="next()">›</button>

                <div class="grid grid-cols-1 items-stretch gap-6 md:grid-cols-3">
                    <template x-for="(p, idx) in visible()" :key="p.key">
                        <div class="relative flex h-full flex-col rounded-2xl border bg-white p-6 text-slate-900 transition-all duration-300"
                            :class="idx === 1 ? 'border-emerald-400 shadow-xl md:scale-105' :
                                'border-slate-200 shadow-sm hover:shadow-lg'">

                            <div class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-md px-5 py-2 text-sm font-extrabold text-white shadow"
                                :class="p.badgeClass" x-text="p.badge"></div>

                            <div class="h-6"></div>

                            <div class="text-center">
                                <h3 class="text-xl font-extrabold tracking-tight" x-text="p.title"></h3>
                                <p class="mt-2 text-sm text-slate-500" x-text="p.tagline"></p>
                            </div>

                            <div class="mt-5">
                                <div class="inline-flex w-full items-center justify-center rounded-xl py-3 text-lg font-extrabold"
                                    :class="p.priceClass" x-text="p.price"></div>
                                <p class="mt-2 text-center text-xs text-slate-400">Harga sekali bayar • Termasuk setup awal
                                </p>
                            </div>

                            <div class="my-6 h-px bg-slate-200"></div>

                            <ul class="flex-1 space-y-4 text-sm">
                                <template x-for="f in p.features" :key="f">
                                    <li class="flex items-start gap-3">
                                        <span
                                            class="mt-0.5 inline-flex h-5 w-5 flex-shrink-0 items-center justify-center rounded-full border border-slate-200 text-emerald-600">✓</span>
                                        <span x-text="f"></span>
                                    </li>
                                </template>
                            </ul>

                            <div class="mt-7">
                                <a class="inline-flex w-full items-center justify-center rounded-xl px-5 py-3 text-sm font-extrabold transition"
                                    href="#kontak"
                                    :class="idx === 1 ? 'bg-emerald-600 text-white hover:bg-emerald-700' :
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

            {{-- TABEL HARGA SEMUA LAYANAN --}}
            <div class="mt-10 rounded-2xl border border-white/10 bg-white/5 p-6">
                <div class="flex flex-col items-start justify-between gap-3 md:flex-row md:items-center">
                    <div>
                        <p class="text-lg font-extrabold">Ringkasan Harga Layanan</p>
                        <p class="mt-1 text-sm text-white/70">Transparan, bisa disesuaikan sesuai scope.</p>
                    </div>
                    <a class="rounded-xl bg-white px-5 py-3 text-sm font-extrabold text-slate-900 hover:bg-slate-100"
                        href="#kontak">
                        Konsultasi Harga
                    </a>
                </div>

                <div class="mt-6 overflow-x-auto">
                    <table class="w-full min-w-[760px] text-left text-sm">
                        <thead class="text-white/80">
                            <tr class="border-b border-white/10">
                                <th class="py-3 pr-4">Layanan</th>
                                <th class="py-3 pr-4">Harga</th>
                                <th class="py-3 pr-4">Cocok untuk</th>
                                <th class="py-3">Catatan</th>
                            </tr>
                        </thead>
                        <tbody class="text-white/80">
                            <tr class="border-b border-white/10">
                                <td class="py-3 pr-4 font-semibold">Hosting + Domain</td>
                                <td class="py-3 pr-4">Rp200.000 / tahun</td>
                                <td class="py-3 pr-4">Website sekolah/UMKM</td>
                                <td class="py-3">Termasuk SSL & setup dasar</td>
                            </tr>
                            <tr class="border-b border-white/10">
                                <td class="py-3 pr-4 font-semibold">Website</td>
                                <td class="py-3 pr-4">Rp300.000 – Rp1.000.000</td>
                                <td class="py-3 pr-4">Company profile, landing page</td>
                                <td class="py-3">Revisi sesuai paket</td>
                            </tr>
                            <tr class="border-b border-white/10">
                                <td class="py-3 pr-4 font-semibold">Web Aplikasi</td>
                                <td class="py-3 pr-4">Rp3.000.000 – Rp5.000.000</td>
                                <td class="py-3 pr-4">Kasir, stok, absensi, sekolah</td>
                                <td class="py-3">Tergantung fitur & kompleksitas</td>
                            </tr>
                            <tr class="border-b border-white/10">
                                <td class="py-3 pr-4 font-semibold">Mobile App (Android)</td>
                                <td class="py-3 pr-4">Rp1.000.000 – Rp5.000.000</td>
                                <td class="py-3 pr-4">Booking, operasional, internal</td>
                                <td class="py-3">Bisa integrasi API</td>
                            </tr>
                            <tr class="border-b border-white/10">
                                <td class="py-3 pr-4 font-semibold">Sistem IoT</td>
                                <td class="py-3 pr-4">Custom</td>
                                <td class="py-3 pr-4">Monitoring/automation</td>
                                <td class="py-3">Menyesuaikan perangkat</td>
                            </tr>
                            <tr class="border-b border-white/10">
                                <td class="py-3 pr-4 font-semibold">Manajemen Jaringan</td>
                                <td class="py-3 pr-4">Custom</td>
                                <td class="py-3 pr-4">Sekolah/kantor/UMKM</td>
                                <td class="py-3">Setup, maintenance, optimasi</td>
                            </tr>
                            <tr>
                                <td class="py-3 pr-4 font-semibold">Pembuatan Server</td>
                                <td class="py-3 pr-4">Custom</td>
                                <td class="py-3 pr-4">Server lokal/cloud</td>
                                <td class="py-3">File server, backup, security</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

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

    {{-- PORTOFOLIO / USE CASE (placeholder) --}}
    <section class="bg-white py-16" id="portofolio">
        <div class="container-max">
            <div class="text-center">
                <h2 class="section-title">Contoh Proyek</h2>
                <p class="section-subtitle">Beberapa contoh solusi yang sering kami kerjakan (bisa disesuaikan).</p>
            </div>

            <div class="mx-auto mt-10 grid max-w-6xl grid-cols-1 gap-6 md:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="text-xs font-semibold text-slate-500">Sekolah</p>
                    <p class="mt-2 text-lg font-extrabold text-slate-900">Website + Informasi Akademik</p>
                    <p class="mt-2 text-sm text-slate-500">Profil sekolah, berita, pengumuman, agenda, dan panel admin.</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="badge">Website</span>
                        <span class="badge">Hosting</span>
                    </div>
                </div>
                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="text-xs font-semibold text-slate-500">UMKM</p>
                    <p class="mt-2 text-lg font-extrabold text-slate-900">Kasir & Stok (Web App)</p>
                    <p class="mt-2 text-sm text-slate-500">Transaksi, stok barang, laporan harian/bulanan, export data.</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="badge">Web App</span>
                        <span class="badge">Laporan</span>
                    </div>
                </div>
                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="text-xs font-semibold text-slate-500">Jasa</p>
                    <p class="mt-2 text-lg font-extrabold text-slate-900">Aplikasi Booking</p>
                    <p class="mt-2 text-sm text-slate-500">Pemesanan jadwal, data pelanggan, status order, integrasi WA.
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="badge">Mobile</span>
                        <span class="badge">WhatsApp</span>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center">
                <a class="btn-primary" href="#kontak">Minta Rekomendasi Proyek</a>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="bg-white py-16" id="faq">
        <div class="container-max">
            <div class="text-center">
                <h2 class="section-title">FAQ</h2>
                <p class="section-subtitle">Pertanyaan yang sering ditanyakan sebelum mulai.</p>
            </div>

            <div class="mx-auto mt-10 grid max-w-4xl grid-cols-1 gap-4">
                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="font-extrabold text-slate-900">Apakah bisa request desain sesuai brand?</p>
                    <p class="mt-2 text-sm text-slate-500">Bisa. Anda dapat kirim referensi desain/brand guideline.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="font-extrabold text-slate-900">Apakah saya perlu menyiapkan konten?</p>
                    <p class="mt-2 text-sm text-slate-500">Jika ada logo/foto/profil bisnis, proses lebih cepat. Jika
                        belum, kami bantu struktur konten.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="font-extrabold text-slate-900">Berapa lama pengerjaannya?</p>
                    <p class="mt-2 text-sm text-slate-500">Tergantung paket dan kelengkapan konten. Setelah konsultasi,
                        kami berikan estimasi timeline yang jelas.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 p-6">
                    <p class="font-extrabold text-slate-900">Bagaimana sistem pembayaran proyek?</p>
                    <p class="mt-2 text-sm text-slate-500">Umumnya DP di awal, pelunasan setelah demo/rilis (kesepakatan
                        fleksibel).</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT / CTA --}}
    <section class="bg-gradient-to-b from-slate-900 to-slate-800 text-white" id="kontak">
        <div class="container-max py-16 text-center">
            <h2 class="text-3xl font-extrabold md:text-4xl">
                Konsultasi Gratis & Rekomendasi Paket
                <span class="text-emerald-400">Paling Cocok</span>
            </h2>

            <p class="mx-auto mt-4 max-w-3xl text-white/75">
                Ceritakan kebutuhan Anda (jenis usaha, tujuan, fitur, dan budget). Kami bantu susun solusi yang paling
                efektif.
            </p>

            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                <a class="btn-primary w-full sm:w-auto"
                    href="https://wa.me/+62882008110510?text=Halo%20RinTech,%20saya%20ingin%20konsultasi%20website%2Faplikasi."
                    target="_blank" rel="noopener">
                    Konsultasi via WhatsApp
                </a>

                <a class="btn-secondary w-full sm:w-auto"
                    href="mailto:rintechdigital@gmail.com?subject=Konsultasi%20Website%2FAplikasi%20-%20RinTech&body=Halo%20RinTech,%0A%0ASaya%20ingin%20konsultasi%20tentang%20website%2Faplikasi.%0A%0A- Nama%3A%0A- Jenis%20usaha%3A%0A- Kebutuhan%3A%0A- Budget%3A%0A%0ATerima%20kasih.">
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
                        <img class="h-12" src="/images/services/logo1.png" alt="rintech">
                    </div>
                    <p class="mt-3 text-white/70">
                        Merintis solusi digital yang siap tumbuh bersama bisnis Anda.
                    </p>
                </div>

                <div>
                    <h4 class="font-extrabold">Layanan</h4>
                    <ul class="mt-4 space-y-2 text-sm text-white/75">
                        <li>Hosting &amp; Domain</li>
                        <li>Website Development</li>
                        <li>Web Aplikasi</li>
                        <li>Mobile Application</li>
                        <li>IoT Solutions</li>
                        <li>Manajemen Jaringan</li>
                        <li>Pembuatan Server</li>
                        <li>Maintenance & Support</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-extrabold">Kontak</h4>
                    <ul class="mt-4 space-y-2 text-sm text-white/75">
                        <li>rintechdigitaltechnology@gmail.com</li>
                        <li>+62 8820 0811 0510</li>
                        <li>Banyumeneng, Mranggen, Demak 59567</li>
                    </ul>
                </div>
            </div>

            <div class="mt-10 text-center text-xs text-white/60">
                © 2026 RinTech - Rintis Technology. All rights reserved.
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
                    tagline: 'Untuk bisnis yang butuh fleksibilitas dan fitur lebih kompleks.',
                    badgeClass: 'bg-emerald-600',
                    price: 'Rp 1.000.000',
                    priceClass: 'bg-emerald-600 text-white',
                    features: [
                        'Landing Page + Company Profile',
                        'Website full custom sesuai kebutuhan',
                        'Hosting 1 tahun',
                        'Domain gratis',
                        'SSL Certificate',
                        'Tampilan modern & fleksibel',
                        'Struktur SEO-friendly',
                    ],
                },
                {
                    key: 'p1',
                    badge: 'Paket 1',
                    title: 'Starter Website',
                    tagline: 'Mulai online cepat dengan budget hemat.',
                    badgeClass: 'bg-slate-900',
                    price: 'Rp 300.000',
                    priceClass: 'bg-slate-900 text-white',
                    features: [
                        'Landing Page / Company Profile',
                        'Hosting 1 tahun',
                        'Domain gratis',
                        '3 pilihan template',
                        'SSL Certificate',
                        'Revisi desain sesuai paket',
                        'Website sederhana & profesional',
                    ],
                },
                {
                    key: 'p2',
                    badge: 'Paket 2',
                    title: 'Business Website',
                    tagline: 'Lebih modern, lebih fleksibel, siap untuk branding.',
                    badgeClass: 'bg-amber-400 text-white',
                    price: 'Rp 500.000',
                    priceClass: 'bg-amber-400 text-white',
                    features: [
                        'Landing Page / Company Profile',
                        'Pilihan template lebih banyak',
                        'Hosting 1 tahun',
                        'Domain gratis',
                        'SSL Certificate',
                        'Tampilan lebih modern & fleksibel',
                        'Optimasi performa dasar',
                    ],
                },
                {
                    key: 'p3',
                    badge: 'Paket 3',
                    title: 'Pro Website',
                    tagline: 'Lebih fleksibel untuk konten & kebutuhan bisnis.',
                    badgeClass: 'bg-sky-600',
                    price: 'Rp 800.000',
                    priceClass: 'bg-sky-600 text-white',
                    features: [
                        'Landing Page / Company Profile',
                        'Template bisa dikurangi/ditambah sesuai kebutuhan',
                        'Hosting 1 tahun',
                        'Domain gratis',
                        'SSL Certificate',
                        'Struktur halaman lebih lengkap',
                        'Optimasi dasar & siap scale-up',
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
