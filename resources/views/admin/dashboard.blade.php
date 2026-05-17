<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="p-6 bg-gray-50 min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="p-2.5 bg-blue-100 rounded-full text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-gray-600 font-medium">Total Layanan</h3>
                </div>
                <div class="text-5xl font-extrabold text-gray-950 mb-2">{{ $serviceCount }}</div>
            </div>

            <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="p-2.5 bg-purple-100 rounded-full text-purple-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-gray-600 font-medium">Total Galeri</h3>
                </div>
                <div class="text-5xl font-extrabold text-gray-950 mb-2">{{ $portfolioCount }}</div>
            </div>

            <div
                class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="p-2.5 bg-blue-100 rounded-full text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-gray-600 font-medium">Kunjungan Hari Ini</h3>
                </div>
                <div class="text-5xl font-extrabold text-gray-950 mb-2">
                    {{ $totalVisitorCount }}
                </div>
                <p class="text-sm text-gray-500">Total hits yang tercatat hari ini</p>
            </div>
        </div>

        <div class="bg-white border rounded-2xl shadow-sm overflow-hidden">
            <div class="p-6 border-b flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-950">Analisis Kunjungan 7 Hari Terakhir</h3>
                </div>
            </div>
            <div class="p-6">
                <div class="h-96 relative">
                    <canvas id="visitorChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mengambil data dari PHP DashboardController
        const chartLabels = @json($chartData['labels'] ?? []);
        const chartDataValues = @json($chartData['data'] ?? []);

        // Cek di console log jika grafik masih kosong
        console.log("Labels:", chartLabels);
        console.log("Values:", chartDataValues);

        const ctx = document.getElementById('visitorChart').getContext('2d');
        const visitorChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartLabels,
                datasets: [{
                    label: 'Kunjungan (Hits)',
                    data: chartDataValues,
                    backgroundColor: '#007bff',
                    borderRadius: 8,
                    barThickness: 30,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: { beginAtZero: true },
                    x: { grid: { display: false } }
                }
            }
        });
    </script>
</x-app-layout>