<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-indigo-800">
                🎉 Selamat Datang di Dashboard Event Workshop!
            </h2>
            <a href="{{ route('events.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                + Buat Event Baru
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-purple-50 via-white to-indigo-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">🔐 Status Login</h3>
                <p class="text-gray-600">Kamu sudah berhasil login ke sistem. Selamat datang kembali!</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Contoh Event Card -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                    <img src="https://source.unsplash.com/400x200/?workshop,education" alt="Workshop" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="font-semibold text-lg text-indigo-700">Workshop Public Speaking</h4>
                        <p class="text-sm text-gray-600 mt-1">Tanggal: 25 April 2025</p>
                        <p class="text-sm text-gray-600">Lokasi: Aula SMA 1</p>
                        <a href="#" class="text-indigo-600 hover:underline mt-2 inline-block">Lihat Detail →</a>
                    </div>
                </div>

                <!-- Tambahkan lebih banyak event card sesuai kebutuhan -->
            </div>

            <div class="bg-indigo-100 p-6 rounded-lg text-center mt-8">
                <h3 class="text-xl font-semibold text-indigo-900">Ingin membuat event baru?</h3>
                <p class="text-gray-700 mt-2">Klik tombol di atas untuk mulai merancang event workshop seru!</p>
            </div>

        </div>
    </div>
</x-app-layout>
