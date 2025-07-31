<x-app-layout>
    <div class="min-h-screen bg-gray-50">
        <!-- Header - Using same blue gradient as admin -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-white">Dashboard E-Learning</h1>
                        <p class="text-blue-100 mt-2">Selamat datang, {{ Auth::user()->name }} ({{ Auth::user()->role }})</p>
                    </div>
                    <div class="bg-white/20 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-sm">
                        <span class="text-white font-bold text-xl">EL</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 -mt-12">
            @if (Auth::user()->role === 'user')
            <!-- User Menu Section - Using same card style as admin -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        Mahasiswa Menu
                    </h2>
                </div>
                
                <div class="divide-y divide-gray-200">
                    <!-- Lihat & Unduh Materi -->
                    <div class="p-6 hover:bg-gray-50 transition-colors duration-150">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-medium text-gray-900">
                                    <a href="{{ route('user.materi.index') }}" class="hover:text-blue-600">📥 Lihat & Unduh Materi</a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Akses semua materi pembelajaran</p>
                            </div>
                        </div>
                    </div>

                    <!-- Additional menu items can be added here following the same pattern -->
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>