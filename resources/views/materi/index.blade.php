<x-app-layout>
    <div class="min-h-screen bg-gray-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-gray-800 mb-3">Daftar Materi Kuliah</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Kumpulan materi pembelajaran yang tersedia untuk Anda</p>
            </div>

            <!-- Materials List -->
            <div class="space-y-6">
                @if($materis->isEmpty())
                    <div class="text-center py-12 bg-white rounded-lg shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-500">Belum ada materi tersedia</h3>
                    </div>
                @else
                    @foreach ($materis as $materi)
                        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
                            <!-- Material Header -->
                            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <h2 class="text-lg font-semibold text-gray-800">{{ $materi->judul }}</h2>
                                </div>
                            </div>
                            
                            <!-- Material Content -->
                            <div class="px-6 py-4">
                                <div class="prose prose-sm max-w-none text-gray-700 mb-4">
                                    {!! nl2br(e($materi->deskripsi)) !!}
                                </div>
                                
                                <!-- Download Button -->
                                <div class="mt-4">
                                    @if ($materi->file_path)
                                        <a href="{{ asset('storage/' . $materi->file_path) }}" 
                                           class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg>
                                            Download Materi
                                        </a>
                                    @else
                                        <span class="inline-flex items-center px-3 py-1.5 rounded text-xs font-medium bg-red-100 text-red-800">
                                            File tidak tersedia
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-app-layout>