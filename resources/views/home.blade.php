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

    <div class="container py-5">
        <h2>Berita Terbaru</h2>
        @if(isset($beritas) && $beritas->isNotEmpty())
            @foreach ($beritas as $berita)
                <div class="news-item">
                    <h3><a href="{{ route('berita.show', $berita->id) }}">{{ $berita->judul }}</a></h3>
                    <p>{{ Str::limit($berita->konten, 150) }}</p>
                </div>
            @endforeach
        @else
            <p>Belum ada berita terbaru.</p>
        @endif
    </div>

    </x-layout>
