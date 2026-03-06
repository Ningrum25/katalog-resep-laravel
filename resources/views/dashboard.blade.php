<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            🍜 Dashboard Katalog Resep
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-orange-50 to-red-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Welcome Card -->
            <div class="bg-white shadow-xl rounded-2xl p-8 mb-8 transition hover:-translate-y-2 duration-300">
                <h3 class="text-2xl font-bold text-gray-700 mb-2">
                    Selamat Datang 👋
                </h3>
                <p class="text-gray-500">
                    Kelola katalog resep makanan dengan mudah dan modern.
                </p>
            </div>

            <!-- Statistic Cards -->
            <div class="grid md:grid-cols-3 gap-6">

                <!-- Total Resep -->
                <div class="bg-white p-6 rounded-2xl shadow-lg transition hover:-translate-y-2 duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Total Resep</p>
                            <h3 class="text-3xl font-bold text-orange-500">0</h3>
                        </div>
                        <div class="text-4xl">🍳</div>
                    </div>
                </div>

                <!-- Kategori -->
                <div class="bg-white p-6 rounded-2xl shadow-lg transition hover:-translate-y-2 duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Kategori</p>
                            <h3 class="text-3xl font-bold text-red-500">0</h3>
                        </div>
                        <div class="text-4xl">🥗</div>
                    </div>
                </div>

                <!-- Favorite -->
                <div class="bg-white p-6 rounded-2xl shadow-lg transition hover:-translate-y-2 duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Resep Favorit</p>
                            <h3 class="text-3xl font-bold text-pink-500">0</h3>
                        </div>
                        <div class="text-4xl">❤️</div>
                    </div>
                </div>

            </div>

            <!-- Recent Activity -->
            <div class="mt-10 bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4 text-gray-700">
                    📌 Aktivitas Terbaru
                </h3>

                <p class="text-gray-400 text-center py-10">
                    Belum ada aktivitas terbaru
                </p>
            </div>

        </div>
    </div>
</x-app-layout>
