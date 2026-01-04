<section class="bg-slate-900 text-white" id="harga">
    <div class="container-max py-16" x-data="pricingSlider()">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold md:text-4xl">Paket Harga Website</h2>
            <p class="mt-3 text-white/70">
                Pilih paket yang sesuai kebutuhan. Bisa request fitur tambahan sesuai proyek.
            </p>
        </div>

        <div
            class="mx-auto mt-6 max-w-3xl rounded-2xl border border-white/10 bg-white/5 p-4 text-center text-sm text-white/70">
            Estimasi pengerjaan menyesuaikan paket dan kebutuhan konten.
        </div>

        <!-- WRAPPER -->
        <div class="relative mt-10 px-4 py-10 md:px-12">

            <!-- PREV BUTTON (HIDDEN ON MOBILE) -->
            <button
                class="absolute -left-2 top-1/2 z-10 hidden h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white text-slate-900 shadow transition hover:bg-slate-100 md:flex md:left-6"
                type="button" @click="prev()">
                ‹
            </button>

            <!-- NEXT BUTTON (HIDDEN ON MOBILE) -->
            <button
                class="absolute -right-2 top-1/2 z-10 hidden h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white text-lg text-slate-900 shadow transition hover:bg-slate-100 md:flex md:right-6"
                type="button" @click="next()">
                ›
            </button>

            <!-- CARD GRID -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <template x-for="(p, idx) in visible()" :key="p.key">
                    <div class="relative flex flex-col rounded-2xl border bg-white p-6 text-slate-900 transition-all duration-300"
                        :class="idx === 1 ?
                            'border-rose-400 shadow-xl md:scale-105' :
                            'border-slate-200 shadow-sm md:hover:shadow-lg'">

                        <!-- BADGE -->
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-md px-5 py-2 text-sm font-extrabold text-white shadow"
                            :class="p.badgeClass" x-text="p.badge"></div>

                        <div class="h-6"></div>

                        <!-- TITLE -->
                        <div class="text-center">
                            <h3 class="text-xl font-extrabold" x-text="p.title"></h3>
                            <p class="mt-2 text-sm text-slate-500" x-text="p.tagline"></p>
                        </div>

                        <!-- PRICE -->
                        <div class="mt-5">
                            <div class="inline-flex w-full items-center justify-center rounded-xl py-3 text-lg font-extrabold"
                                :class="p.priceClass" x-text="p.price"></div>
                            <p class="mt-2 text-center text-xs text-slate-400">Harga sekali bayar</p>
                        </div>

                        <div class="my-6 h-px bg-slate-200"></div>

                        <!-- FEATURES -->
                        <ul class="flex-1 space-y-4 text-sm">
                            <template x-for="f in p.features" :key="f">
                                <li class="flex items-start gap-3">
                                    <span
                                        class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full border border-slate-200 text-emerald-600">✓</span>
                                    <span x-text="f"></span>
                                </li>
                            </template>
                        </ul>

                        <!-- CTA -->
                        <div class="mt-7">
                            <a class="inline-flex w-full items-center justify-center rounded-xl px-5 py-3 text-sm font-extrabold transition"
                                href="#kontak"
                                :class="idx === 1 ?
                                    'bg-rose-600 text-white hover:bg-rose-700' :
                                    'bg-slate-900 text-white hover:bg-slate-800'">
                                Pilih Paket Ini
                            </a>
                        </div>

                    </div>
                </template>
            </div>
        </div>
    </div>
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
