<x-layout>
    <x-slot:title>
        fasilitas
    </x-slot>

    <div class="text-center">
        <h2 class="text-2xl font-bold mb-4">Selamat Datang di STT Cipasung</h2>
        <p class="mb-8">Temukan berbagai fasilitas kampus yang mendukung kegiatan belajar mengajar dan kebutuhan mahasiswa.</p>

        <!-- Konten dua kolom -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <section id="mesjid" class="mb-8">
                <h3 class="text-xl font-semibold">Mesjid</h3>
                <p>Mesjid kampus digunakan untuk kegiatan ibadah dan keagamaan oleh mahasiswa dan staf.</p>
                <div class="aspect-video w-full">
                    <img src="{{ asset('img/mesjid.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="Mesjid Kampus">
                </div>
            </section>

            <section id="laboratorium-komputer" class="mb-8">
                <h3 class="text-xl font-semibold">Laboratorium Komputer</h3>
                <p>Laboratorium komputer dilengkapi perangkat modern untuk mendukung pembelajaran berbasis teknologi.</p>
                <div class="aspect-video w-full">
                    <img src="{{ asset('img/Ruang lab.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="Laboratorium Komputer">
                </div>
            </section>

            <section id="lapang" class="mb-8">
                <h3 class="text-xl font-semibold">Lapang</h3>
                <p>Lapang olahraga tersedia untuk berbagai aktivitas fisik dan pertandingan olahraga.</p>
                <div class="aspect-video w-full">
                    <img src="{{ asset('img/lapang.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="Lapang Olahraga">
                </div>
            </section>

            <section id="kelas" class="mb-8">
                <h3 class="text-xl font-semibold">Kelas</h3>
                <p>Ruang kelas yang nyaman dan dilengkapi fasilitas multimedia untuk menunjang proses belajar.</p>
                <div class="aspect-video w-full">
                    <img src="{{ asset('img/kelas.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="Ruang Kelas">
                </div>
            </section>

            <section id="toilet" class="mb-8">
                <h3 class="text-xl font-semibold">TOILET</h3>
                <p>Kamar mandi bersih dan terawat tersedia di berbagai lokasi kampus.</p>
                <div class="aspect-video w-full">
                    <img src="{{ asset('img/toilet.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="Toilet Kampus">
                </div>
            </section>

            <section id="kantin" class="mb-8">
                <h3 class="text-xl font-semibold">Kantin</h3>
                <p>Kantin kampus menyediakan berbagai pilihan makanan dan minuman dengan harga terjangkau.</p>
                <div class="aspect-video w-full">
                    <img src="{{ asset('img/kantin.jpeg') }}" class="w-full h-full object-cover rounded-lg" alt="Kantin Kampus">
                </div>
            </section>

            <section id="perpustakaan" class="mb-8">
                <h3 class="text-xl font-semibold">Perpustakaan</h3>
                <p>Perpustakaan kampus memiliki koleksi buku, jurnal, dan sumber belajar lainnya.</p>
                <div class="aspect-video w-full">
                    <img src="{{ asset('img/perpustakaan.jpeg') }}" class="w-full h-full object-cover rounded-lg" alt="Perpustakaan Kampus">
                </div>
            </section>
        </div>
    </div>
</x-layout>
