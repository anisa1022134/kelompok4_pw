<x-layout>
    <x-slot:title>
        Struktur Kampus
    </x-slot>
    <h1 class="text-center m-4">Struktur STT Cipasung</h1>

    <div class="container pb-5">
        <img src="{{ asset('img/Struktur.png') }}" class="d-block w-100" alt="...">

        <section id="testimoni-alumni" class="container my-5">
          <h2 class="text-center mb-4">Pimpinan STT Cipasung</h2>
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card shadow-sm border-0">
                <img src="{{ asset('img/bapak.jpg') }}" class="object-none h-96" alt="">
                <div class="card-body">
                  <h5 class="card-title">Drs.K.H. Abdul Chobir, M.T.</h5>
                  <p class="text-muted">Software Engineer di PT Teknologi Cerdas</p>
                  <p class="card-text">"Para dosen sangat kompeten dan selalu mendukung pengembangan keterampilan kami."</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card shadow-sm border-0">
                <img src="{{ asset('img/bu ida.jpg') }}" class="object-cover h-96" alt="">
                <div class="card-body">
                  <h5 class="card-title">Hj. Neng Ida Nurhalida, M.Pd</h5>
                  <p class="text-muted">Data Scientist di MID Data Analytics</p>
                  <p class="card-text">"Saya sangat berterima kasih kepada STTC yang telah membekali saya dengan ilmu yang aplikatif di dunia kerja. Pengalaman di sini juga membantu saya membangun jaringan profesional yang sangat bermanfaat."</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card shadow-sm border-0">
                <img src="{{ asset('img/ade.jpg') }}" class="object-cover h-96" alt="">
                <div class="card-body">
                  <h5 class="card-title">Ahmad Zamakhsyari Sidiq, M.T.</h5>
                  <p class="text-muted">Cybersecurity Analyst di SecureTech Solutions</p>
                  <p class="card-text">"Program Studi Informatika STTC mempersiapkan saya untuk menghadapi tantangan di bidang keamanan siber. Kurikulum yang relevan dan lingkungan belajar yang mendukung sangat membantu saya mencapai karir impian."</p>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>

</x-layout>
