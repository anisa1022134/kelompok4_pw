<nav class="bg-white shadow-xl" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-20 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>

            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex shrink-0 items-center">
          <img class="h-16 w-auto" src="img/logo.png" alt="Your Company">
        </div>
        <div
        class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-end">
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/home" class="{{request()->is('home') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">Home</a>
              <div class="relative ml-3">
                <div>
                  <button type="button" @click="isOpen = !isOpen" class="relative flex rounded-full" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">Tentang</a>
                  </button>
                </div>

                <div x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->
                  <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Profil</a>
                  <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Struktus Kampus</a>
                  <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Fasilitas</a>
                  <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">RIPK/Tahun</a>
                </div>
              </div>

              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium">Akademik</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium">Mahasiswa</a>
              <a href="/pmb" class="{{request()->is('pmb') ? 'bg-gray-900 text-white' : 'text-gray-900 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium">PMB Online</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium bg-green-700 text-white hover:bg-green-400">LogIn</a>
            </div>
          </div>
        </div>
    </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
      </div>
    </div>
  </nav>
