<x-layout>
    <x-slot:title>
        Beasiswa
    </x-slot>

    <div class="container-fluid bg-success p-2">
        <div class="container">
             <h2 class="text-white">Beasiswa</h2>
        </div>
   </div>

   <div class="container mt-4 mb-4">
        <div>
        <p>Sekolah Tinggi Teknologi Cipasung merupakan Sekolah Tinggi yang berada di Priangan Timur, setiap tahunnya Sekolah Tinggi Teknologi Cipasung atau biasa disebut STTC selalu di penuhi oleh Mahasiswa baru dari berbagai daerah dari seluruh Indonesia dengan berbagai latar belakang ekonomi, STT Cipasung tentunya tidak ingin keterbatasan ekonomi menjadi penghalang bagi Mahasiswa untuk dapat belajar. Maka dari itu STT Cipasung menyediakan berbagai jenis beasiswa bagi Mahasiswa.</p>
        </div>

        @foreach ( $beasiswas as $beasiswa )


        <div class="my-4">
             <h3>
                  {{$beasiswa->judul}}
             </h3>
             <p>{{$beasiswa->deskripsi}}</p>
             <button class="btn btn-success"><a class="text-white" href="{{route('beasiswa.show', $beasiswa->id)}}">Baca Selengkapnya</a></button>
        </div>
        @endforeach
   </div>
</x-layout>
