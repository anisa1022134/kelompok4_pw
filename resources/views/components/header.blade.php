<nav class="bg-white shadow-xl" x-data="{ tentangOpen: false, mahasiswaOpen: false, mobileOpen: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-20 items-center justify-between">
        <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">
            <!-- Mobile menu button -->
            <button type="button" @click="mobileOpen = !mobileOpen" class="relative inline-flex items-center justify-center sm:justify-end rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>

              <svg :class="{'hidden': mobileOpen, 'block': !mobileOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>

              <svg :class="{'block': mobileOpen, 'hidden': !mobileOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

        <div class="flex shrink-0 items-center">
          <img class="h-16 w-auto" src="img/logo.png" alt="Your Company">
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-end">
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="{{request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Home</a>

              <!-- Dropdown untuk Tentang -->
              <div class="relative ml-3" x-data="{ open: false }">
                <button @click="open = !open" @click.away="open = false" class="relative flex items-center rounded-full">
                    <span class="rounded-md px-3 py-2 text-sm font-medium
                    {{request()->is('profil') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}
                    {{request()->is('struktur') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}
                    {{request()->is('fasilitas') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}
                    {{request()->is('ripk') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}
                    ">
                        Tentang
                    </span>
                </button>
                <div x-show="open"
                  x-transition:enter="transition ease-out duration-100 transform"
                  x-transition:enter-start="opacity-0 scale-95"
                  x-transition:enter-end="opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75 transform"
                  x-transition:leave-start="opacity-100 scale-100"
                  x-transition:leave-end="opacity-0 scale-95"
                  class="absolute z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                  role="menu" aria-orientation="vertical">
                  <a href="{{route('profil.index')}}" class="block px-4 py-2 {{request()->is('profil') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}">Profil</a>
                  <a href="{{route('struktur.index')}}" class="block px-4 py-2 text-sm {{request()->is('struktur') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}">Struktur Kampus</a>
                  <a href="{{route('fasilitas.index')}}" class="block px-4 py-2 text-sm {{request()->is('fasilitas') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}">Fasilitas</a>
                  <a href="{{route('ripk.index')}}" class="block px-4 py-2 text-sm {{request()->is('ripk') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}">RIPK/Tahun</a>
                </div>
              </div>

              <div class="relative ml-3" x-data="{ isAcademicOpen: false }">
                <div>
                    <button type="button" @click="isAcademicOpen = !isAcademicOpen" @click.away="isAcademicOpen = false" class="relative flex rounded-full">
                        <span class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">Akademik</span>
                    </button>
                </div>

                <div x-show="isAcademicOpen"
                    x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                    role="menu" aria-orientation="vertical">

                    <!-- Dropdown untuk Jurusan -->
                    <div class="relative group">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jurusan</a>
                        <div class="absolute left-full top-0 hidden w-48 bg-white rounded-md shadow-lg ring-1 ring-black/5 group-hover:block">
                            <a href="{{route('informatika.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Informatika</a>
                            <a href="{{route('industri.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Teknik Industri</a>
                        </div>
                    </div>

                    <!-- Link to Kalender Akademik -->
                    <a href="{{route('kalender.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Kalender Akademik</a>
                </div>
            </div>



              <!-- Dropdown untuk Mahasiswa -->
              <div class="relative ml-3" x-data="{ open: false }">
                <button @click="open = !open" @click.away="open = false" class="relative flex items-center rounded-full">
                  <span class="rounded-md px-3 py-2 text-sm font-medium
                  {{request()->is('beasiswa') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}
                  {{request()->is('ormawa') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}
                  ">Mahasiswa</span>
                </button>
                <div x-show="open"
                  x-transition:enter="transition ease-out duration-100 transform"
                  x-transition:enter-start="opacity-0 scale-95"
                  x-transition:enter-end="opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75 transform"
                  x-transition:leave-start="opacity-100 scale-100"
                  x-transition:leave-end="opacity-0 scale-95"
                  class="absolute z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                  role="menu" aria-orientation="vertical">
                  <a href="{{route('ormawa.index')}}" class="block px-4 py-2 text-sm {{request()->is('ormawa') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}">Ormawa</a>
                  <a href="{{route('beasiswa.index')}}" class="block px-4 py-2 text-sm {{request()->is('beasiswa') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}">Beasiswa</a>
                </div>
              </div>

              <a href="{{route('pmb.index')}}" class="{{request()->is('pmb') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">PMB Online</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium bg-green-700 text-white hover:bg-green-400">LogIn</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="mobileOpen" class="sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <a href="/home" class="block rounded-md px-3 py-2 text-base font-medium {{request()->is('home') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}">Home</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Tentang</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Akademik</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Mahasiswa</a>
        <a href="/pmb" class="block rounded-md px-3 py-2 text-base font-medium {{request()->is('pmb') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}}">PMB Online</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">LogIn</a>
      </div>
    </div>
  </nav>
