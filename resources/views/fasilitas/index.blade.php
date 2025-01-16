<x-layout>
    <x-slot:title>
        fasilitas
    </x-slot>

    <div class="text-center mt-20">
        <h2 class="text-2xl font-bold mb-4">Selamat Datang di STT Cipasung</h2>
        <p class="mb-8">Temukan berbagai fasilitas kampus yang mendukung kegiatan belajar mengajar dan kebutuhan mahasiswa.</p>

        <div class="flex justify-center px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-screen-lg mx-auto mb-16 w-full">
                <div class="max-w-xl rounded overflow-hidden shadow-lg">
                    <img class="w-full h-96 object-cover" src="{{ asset('storage/img/mesjid.jpg') }}" alt="Mesjid">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">MESJID</div>
                        <p class="text-gray-700 text-base">
                            Mesjid kampus digunakan untuk kegiatan ibadah dan keagamaan oleh mahasiswa dan staf.
                        </p>
                    </div>
                </div>
                <div class="max-w-xl rounded overflow-hidden shadow-lg">
                    <img class="w-full h-96 object-cover" src="{{ asset('storage/img/lapang.jpg') }}" alt="Lapang">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">LAPANG</div>
                        <p class="text-gray-700 text-base">
                            Digunakan untuk mahasiswa yang berolahraga, dan atau kegiatan lainnya
                        </p>
                    </div>
                </div>
                <div class="max-w-xl rounded overflow-hidden shadow-lg">
                    <img class="w-full h-96 object-cover" src="{{ asset('storage/img/kantin.jpeg') }}" alt="KANTIN">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">KANTIN</div>
                        <p class="text-gray-700 text-base">
                            Kantin kampus menyediakan berbagai pilihan makanan dan minuman dengan harga terjangkau
                        </p>
                    </div>
                </div>
                <div class="max-w-xl rounded overflow-hidden shadow-lg">
                    <img class="w-full h-96 object-cover" src="{{ asset('storage/img/kelas.jpg') }}" alt="KELAS">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">RUANG KELAS</div>
                        <p class="text-gray-700 text-base">
                            Ruang kelas yang nyaman dan dilengkapi fasilitas multimedia untuk menunjang proses belajar.
                        </p>
                    </div>
                </div>
                <div class="max-w-xl rounded overflow-hidden shadow-lg">
                    <img class="w-full h-96 object-cover" src="{{ asset('storage/img/labkom.jpg') }}" alt="LABKOM">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">LABORATRIUM KOMPUTER</div>
                        <p class="text-gray-700 text-base">
                            Laboratorium komputer dilengkapi perangkat modern untuk mendukung pembelajaran berbasis teknologi.
                        </p>
                    </div>
                </div>
                <div class="max-w-xl rounded overflow-hidden shadow-lg">
                    <img class="w-full h-96 object-cover" src="{{ asset('storage/img/toilet.jpg') }}" alt="Mesjid">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">TOILER / WC</div>
                        <p class="text-gray-700 text-base">
                            Toilet / WC bersih dan terawat tersedia di berbagai lokasi kampus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
