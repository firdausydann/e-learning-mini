<x-app-layout>
    <div class="py-8 px-4 sm:px-6 lg:px-8 max-w-3xl mx-auto">
        <!-- Form Header -->
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Tambah Materi Baru
            </h1>
            <p class="text-gray-600">Isi form berikut untuk menambahkan materi pembelajaran baru</p>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 sm:p-8 border border-gray-100">
            <form action="{{ route('admin.materi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Judul Materi Field -->
                <div>
                    <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Materi</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input type="text" name="judul" id="judul" required
                            class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-400 transition"
                            placeholder="Masukkan judul materi">
                    </div>
                </div>

                <!-- Deskripsi Field -->
                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Materi</label>
                    <div class="mt-1">
                        <textarea name="deskripsi" id="deskripsi" rows="5" required
                            class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-400 transition"
                            placeholder="Tambahkan deskripsi materi pembelajaran"></textarea>
                    </div>
                </div>

                <!-- File Upload Field -->
                <div>
                    <label for="file" class="block text-sm font-medium text-gray-700 mb-1">File Materi (PDF/Video)</label>
                    <div class="mt-1">
                        <div class="flex items-center justify-center w-full">
                            <label for="file" class="flex flex-col w-full cursor-pointer">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6 px-4 border-2 border-gray-300 border-dashed rounded-lg hover:bg-gray-50 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500">
                                        <span class="font-semibold">Klik untuk upload</span> atau drag & drop
                                    </p>
                                    <p class="text-xs text-gray-500">PDF, MP4, atau format video lainnya (MAX: 10MB)</p>
                                </div>
                                <input type="file" name="file" id="file" required class="hidden" accept=".pdf,.mp4,.mov,.avi">
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-end gap-3 pt-4">
                    <a href="{{ route('admin.materi.index') }}" class="px-6 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                        Batal
                    </a>
                    <button type="submit" class="px-6 py-2.5 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                        </svg>
                        Simpan Materi
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>