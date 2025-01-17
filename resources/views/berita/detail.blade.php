<x-layout>
    <x-slot:title>
        {{ $berita->judul }}
    </x-slot:title>

    <div class="container py-5">
        <h1>{{ $berita->judul }}</h1>
        <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid my-4" alt="{{ $berita->judul }}">
        <p>{{ $berita->konten }}</p>
        <a href="{{ route('home') }}" class="btn btn-primary mt-4">Kembali ke Beranda</a>
    </div>
    </x-layout>
