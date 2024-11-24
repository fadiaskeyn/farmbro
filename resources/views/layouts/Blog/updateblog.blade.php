<x-app-layout>
    {{-- <div class="container p-8 mx-auto"> --}}
        <h2 class="mb-6 text-2xl font-bold text-blue-600">Edit Blog</h2>

        <!-- Form untuk Edit Blog -->
        <form action="{{ route('bloging.update', $blog->id) }}" method="POST" class="p-6 space-y-6 bg-white rounded-lg shadow-md" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Method PUT untuk update -->

            <!-- Input Judul -->
            <div class="flex flex-col space-y-2">
                <label for="judul" class="font-medium text-gray-700">Judul</label>
                <input
                    type="text"
                    id="judul"
                    name="judul"
                    value="{{ $blog->title }}"
                    class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan Judul"
                    required>
            </div>

            <!-- Input Tanggal -->
            <div class="flex flex-col space-y-2">
                <label for="tanggal" class="font-medium text-gray-700">Tanggal</label>
                <input
                    type="date"
                    id="tanggal"
                    name="tanggal"
                    value="{{ $blog->created_at->format('Y-m-d') }}"
                    class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <!-- Input Gambar -->
            <div class="flex flex-col space-y-2">
                <label for="gambar" class="font-medium text-gray-700">Gambar</label>
                @if ($blog->images)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $blog->images) }}" alt="Gambar Blog" class="w-32 h-32 rounded-md">
                    </div>
                @endif
                <input
                    type="file"
                    id="gambar"
                    name="gambar"
                    class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    accept="image/*">
            </div>

            <!-- Input Deskripsi -->
            <div class="flex flex-col space-y-2">
                <label for="deskripsi" class="font-medium text-gray-700">Deskripsi</label>
                <textarea
                    id="summernote"
                    name="deskripsi"
                    class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>{{ $blog->description }}</textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-6 py-3 text-white bg-green-500 rounded-md hover:bg-green-600">
                    Perbarui
                </button>
            </div>
        </form>
    {{-- </div> --}}

    <!-- Tambahkan Script Summernote -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 200,
                placeholder: 'Edit deskripsi blog di sini...',
                toolbar: [
                    ['style', ['bold', 'italic', 'underline']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            });
        });
    </script>
</x-app-layout>
