<x-layout>
    <x-slot:title>
        Ormawa
    </x-slot>

    <div class="container mb-10">
        <img src="{{ asset('img/ormawa 1.jpg') }}" alt="ormawa 1" class="w-full h-auto object-cover rounded-lg shadow-md">
    </div>
    <div class="container mx-auto px-4 py-6">

        <section class="mb-10">
            <h2 class="text-2xl font-bold mb-4">Ormawa Sekolah Tinggi Teknologi Cipasung</h2>
            </p>
            <p class="text-gray-600 leading-relaxed mb-4">
                Ormawa di Sekolah Tinggi Teknologi Cipasung adalah wadah bagi mahasiswa untuk mengasah keterampilan, memperluas wawasan, dan mengejar minat serta bakat di berbagai bidang. Mulai dari kegiatan kemanusiaan, seni, olahraga, penelitian, hingga kewirausahaan, setiap unit Ormawa menawarkan pengalaman unik dan berharga yang akan mendukung pengembangan pribadi serta profesional mahasiswa.
            </p>
            <p class="text-gray-600 leading-relaxed mb-4">
                Berikut adalah daftar Ormawa yang ada di Sekolah Tinggi Teknologi Cipasung. Mari kita jelajahi bersama dan temukan unit kegiatan yang paling sesuai dengan minat dan passion Anda. Bergabunglah dan jadilah bagian dari komunitas dinamis yang siap menginspirasi dan membawa perubahan positif bagi diri sendiri maupun lingkungan sekitar.
            </p>
            <h2 class="text-2xl font-bold mt-10 mb-4">Daftar Ormawa Sekolah Tinggi Teknoogi Cippasung</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>01. BEM STT Cipasung</li>
                <li>02. HMTI STT Cipasung</li>
                <li>03. HMIF STT Cipasung</li>
                <li>04. UKM Kerohanian</li>
                <li>05. UKM Olahraga</li>
                <li>06. UKM Sanggar TERASI</li>
                <li>07. UKM Rilis</li>
                <li>08. UKM KELAPA</li>
                <li>09. UKM Dignity</li>
                <li>10. UKM Keluarga Donor Darah</li>
                <li>11. UKM Proclub</li>
            </ul>
        </section>

        <section class="mb-30">
            <h2 class="text-2xl font-bold mb-10">Logo Ormawa</h2>
            <div class="relative overflow-hidden">
                <div class="flex gap-4 animate-scroll whitespace-nowrap">
                    <img src="{{ asset('img/LOGO BEM STT Cipasung.png') }}" alt="Logo BEM" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                    <img src="{{ asset('img/Logo HMIF.png') }}" alt="Logo HMTI" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                    <img src="{{ asset('img/Logo HMTI.jpg') }}" alt="Logo HMIF" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                    <img src="{{ asset('img/Logo Kerohanian.png') }}" alt="Logo kerohanian" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                    <img src="{{ asset('img/Logo Olahraga .png') }}" alt="Logo olahraga" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                    <img src="{{ asset('img/Logo Rilis.png') }}" alt="Logo Sanggar" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                    <img src="{{ asset('img/Logo Sanggar.png') }}" alt="Logo Rilis" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                    <img src="{{ asset('img/logo kelapa.png') }}" alt="Logo Rilis" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                    <img src="{{ asset('img/dignity.png') }}" alt="Logo Rilis" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                    <img src="{{ asset('img/logo kdd.png') }}" alt="Logo Rilis" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                    <img src="{{ asset('img/proclub.png') }}" alt="Logo Rilis" style="width: 150px; height: 150px;" class="w-24 h-24 object-contain rounded-lg shadow-md">
                </div>
            </div>
            <style>
                @keyframes scroll {
                    0% {transform: translateX(150%);}
                    50% {transform: translateX(0%);}
                    100% {transform: translateX(-150%);}
                }
                .animate-scroll {
                    display: inline-flex;
                    animation: scroll 20s linear infinite;
                }
            </style>
        </section>
    </div>
</x-layout>
