<x-layout>
    <x-slot:title>
        kalender akademik
    </x-slot>

    <div>
    <div class="container mx-auto px-4 py-8">
        <div class="space-y-4">
            <!-- Item 1 -->
            <div class="border border-gray-300 rounded shadow">
                <button 
                    class="w-full text-left px-4 py-3 bg-white flex justify-between items-center font-semibold"
                    onclick="toggleAccordion(this)">
                    <span>KALENDER AKADEMIK 2021-2022</span>
                    <span class="accordion-icon">&darr;</span>
                </button>
                <div class="accordion-content hidden bg-gray-50 px-4 py-3">
                    <button 
                        class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
                        onclick="downloadFile('kalender2021.pdf')">Unduh untuk Melihat</button>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="border border-gray-300 rounded shadow">
                <button 
                    class="w-full text-left px-4 py-3 bg-white flex justify-between items-center font-semibold"
                    onclick="toggleAccordion(this)">
                    <span>KALENDER AKADEMIK 2022-2023</span>
                    <span class="accordion-icon">&darr;</span>
                </button>
                <div class="accordion-content hidden bg-gray-50 px-4 py-3">
                    <button 
                        class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
                        onclick="downloadFile('kalender2022.pdf')">Unduh untuk Melihat</button>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="border border-gray-300 rounded shadow">
                <button 
                    class="w-full text-left px-4 py-3 bg-white flex justify-between items-center font-semibold"
                    onclick="toggleAccordion(this)">
                    <span>KALENDER AKADEMIK 2023-2024</span>
                    <span class="accordion-icon">&darr;</span>
                </button>
                <div class="accordion-content hidden bg-gray-50 px-4 py-3">
                    <button 
                        class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
                        onclick="downloadFile('kalender2023.pdf')">Unduh untuk Melihat</button>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="border border-gray-300 rounded shadow">
                <button 
                    class="w-full text-left px-4 py-3 bg-white flex justify-between items-center font-semibold"
                    onclick="toggleAccordion(this)">
                    <span>KALENDER AKADEMIK 2024-2025</span>
                    <span class="accordion-icon">&darr;</span>
                </button>
                <div class="accordion-content hidden bg-gray-50 px-4 py-3">
                    <button 
                        class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
                        onclick="downloadFile('kalender2024.pdf')">Unduh untuk Melihat</button>
                </div>
            </div>
        </div>
    </div>

</x-layout>

<script>
    function toggleAccordion(button) {
        var content = button.nextElementSibling;
        var icon = button.querySelector('.accordion-icon');
        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.innerHTML = '&uarr;';
        } else {
            content.classList.add('hidden');
            icon.innerHTML = '&darr;';
        }
    }

    function downloadFile(fileName) {
        window.location.href = '/path/to/files/' + fileName; // Ganti dengan lokasi file sebenarnya
    }
</script>
