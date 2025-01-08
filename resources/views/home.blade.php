<x-layout>
<x-slot:title>
        Home
    </x-slot>
          <h1 class="text-center m-4">Berita Terbaru</h1>
        <div class="container pb-5">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="img/gambar1.jpg" class="card-img-top card-img" alt="Berita 1">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 1</h5>
                            <p class="card-text">Ini adalah ringkasan berita 1. Ini memberikan sedikit informasi tentang konten berita.</p>
                            <a href="berita1.html" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="img/gambar2.jpg" class="card-img-top card-img" alt="Berita 2">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 2</h5>
                            <p class="card-text">Ini adalah ringkasan berita 2. Ini memberikan sedikit informasi tentang konten berita.</p>
                            <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="img/gambar3.jpg" class="card-img-top card-img" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 3</h5>
                            <p class="card-text">Ini adalah ringkasan berita 3. Ini memberikan sedikit informasi tentang konten berita.</p>
                            <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="img/gambar1.jpg" class="card-img-top card-img" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 3</h5>
                            <p class="card-text">Ini adalah ringkasan berita 3. Ini memberikan sedikit informasi tentang konten berita.</p>
                            <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="img/gambar2.jpg" class="card-img-top card-img" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 3</h5>
                            <p class="card-text">Ini adalah ringkasan berita 3. Ini memberikan sedikit informasi tentang konten berita.</p>
                            <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="img/gambar3.jpg" class="card-img-top card-img" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 3</h5>
                            <p class="card-text">Ini adalah ringkasan berita 3. Ini memberikan sedikit informasi tentang konten berita.</p>
                            <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const track = document.querySelector('.carousel-track');
            const slides = Array.from(track.children);
            const nextButton = document.getElementById('next');
            const prevButton = document.getElementById('prev');
            const slideWidth = slides[0].getBoundingClientRect().width;

            let currentIndex = 0;

            function updateCarousel() {
              track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            }

            nextButton.addEventListener('click', () => {
              currentIndex = (currentIndex + 1) % slides.length;
              updateCarousel();
            });

            prevButton.addEventListener('click', () => {
              currentIndex = (currentIndex - 1 + slides.length) % slides.length;
              updateCarousel();
            });
          </script>
</x-layout>
