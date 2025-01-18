<x-layout>
    <x-slot:title>Tambah Berita</x-slot:title>

    <div class="container py-5">
        <h1>Tambah Berita Baru</h1>

        <!-- Form untuk tambah berita -->
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul Berita</label>
                <input type="text" class="form-control" name="title" placeholder="Judul Berita" required>
            </div>

            <div class="mb-3">
                <label for="publisher" class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="publisher" placeholder="Penerbit" required>
            </div>

            <div class="mb-3">
                <label for="cover" class="form-label">Cover (Gambar)</label>
                <input type="file" class="form-control" name="cover" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="publish_date" class="form-label">Tanggal Publikasi</label>
                <input type="date" class="form-control" name="publish_date" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Konten Berita</label>
                <textarea class="form-control" name="content" placeholder="Konten Berita" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Berita</button>
        </form>
    </div>
</x-layout>
