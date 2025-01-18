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

          <h1 class="text-center m-4">Berita Terbaru</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row g-3">
        @foreach($beritas as $berita)
        <div class="col-md-4">
            <div class="card bg-light card-item">
                <img src="{{ asset('storage/covers/' . $berita->gambar) }}" class="card-img-top card-img" alt="{{ $berita->judul }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $berita->judul }}</h5>
                    <p class="card-text line-clamp-2">{{ $berita->ringkasan }}</p>
                    <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-success">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </x-layout>
