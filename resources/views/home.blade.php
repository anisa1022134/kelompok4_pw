<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/img/gambar1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/img/gambar2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/img/gambar3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid bg-success p-2">
        <div class="container">
             <h2 class="text-white text-center">Berita Terbaru</h2>
        </div>
   </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="flex justify-center px-4 sm:px-6 lg:px-8 my-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-screen-lg mx-auto">
            @foreach ($beritas as $berita)
            <div class="max-w-xl rounded overflow-hidden shadow-lg">
                <img class="w-full h-64 object-cover" src="{{ asset('storage/covers/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                <div class="px-6 py-4">
                    <h5 class="card-title line-clamp-2">{{ $berita->judul }}</h5>
                    <p class="card-text line-clamp-2">{{ $berita->ringkasan }}</p>
                    <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-success">Baca Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>




    </x-layout>
