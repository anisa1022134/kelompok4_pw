<x-layout>
<x-slot:title>
        Home
    </x-slot>
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
        <div class="container pb-5">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="{{asset('storage/img/gambar1.jpg')}}" class="card-img-top card-img" alt="Berita 1">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 1</h5>
                            <p class="card-text line-clamp-2">Ini adalah ringkasan berita 1. Ini memberikan sedikit informasi tentang konten berita Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat omnis ad assumenda autem eos similique perferendis, nulla numquam maxime enim, porro ullam tempora reiciendis necessitatibus magni odio possimus est aliquam..</p>
                            <a href="{{route('berita.index')}}" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="{{asset('storage/img/gambar2.jpg')}}" class="card-img-top card-img" alt="Berita 2">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 2</h5>
                            <p class="card-text line-clamp-2">Ini adalah ringkasan berita 2. Ini memberikan sedikit informasi tentang konten berita. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis officiis facilis iusto earum tenetur aut mollitia id optio eum molestiae. Possimus amet laboriosam incidunt dignissimos. Exercitationem quis magnam minima tempora!</p>
                            <a href="{{route('berita.index')}}" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="{{asset('storage/img/gambar3.jpg')}}" class="card-img-top card-img" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 3</h5>
                            <p class="card-text line-clamp-2">Ini adalah ringkasan berita 3. Ini memberikan sedikit informasi tentang konten berita. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dignissimos voluptatibus officiis dolor officia itaque quas accusantium, quasi voluptates odio natus velit ratione eos similique totam aperiam nemo fugit temporibus?</p>
                            <a href="{{route('berita.index')}}" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="{{asset('storage/img/gambar1.jpg')}}" class="card-img-top card-img" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 3</h5>
                            <p class="card-text line-clamp-2">Ini adalah ringkasan berita 3. Ini memberikan sedikit informasi tentang konten berita. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ab ipsa? Porro neque rem illum quaerat exercitationem molestiae officia dicta sit mollitia distinctio. Sequi unde laboriosam inventore enim totam debitis!</p>
                            <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                        <img src="{{asset('storage/img/gambar2.jpg')}}" class="card-img-top card-img" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 3</h5>
                            <p class="card-text line-clamp-2">Ini adalah ringkasan berita 3. Ini memberikan sedikit informasi tentang konten berita. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio ratione iste cumque eos animi corrupti repellat quis eligendi suscipit quasi esse illo illum perferendis, adipisci, eveniet rerum ipsam similique! Quos?</p>
                            <a href="#" class="btn btn-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light card-item">
                <img src="{{asset('storage/img/gambar3.jpg')}}" class="card-img-top card-img" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Berita 3</h5>
                            <p class="card-text line-clamp-2">Ini adalah ringkasan berita 3. Ini memberikan sedikit informasi tentang konten berita. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio sunt eligendi quod illum laborum exercitationem placeat, officia voluptatem magnam, laudantium iste libero! Voluptatibus, ex? Ipsa, error. Accusamus rem dolorem quas.</p>
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
