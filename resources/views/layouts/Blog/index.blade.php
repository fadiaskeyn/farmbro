<x-app-layout>
    <div class="container py-8 mx-auto">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-gray-800">Blog</h1>
            <a href="{{ route('bloging.create') }}" class="flex items-center px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Tambah
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-gray-700 bg-white border border-gray-200">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-4 py-2 border-r">No</th>
                        <th class="px-4 py-2 border-r">Judul</th>
                        <th class="px-4 py-2 border-r">Tanggal</th>
                        <th class="px-4 py-2 border-r">Deskripsi</th>
                        <th class="px-4 py-2 border-r">Gambar</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $key => $blog)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2 text-center border-r">{{ $key + 1 }}</td>
                            <td class="px-4 py-2 border-r">{{ $blog->title }}</td>
                            <td class="px-4 py-2 text-center border-r">{{ $blog->created_at->format('Y-m-d') }}</td>
                            <td class="px-4 py-2 border-r">{!! Str::limit($blog->description, 50, '...') !!}</td>
                            <td class="px-4 py-2 text-center border-r">
                                @if ($blog->images)
                                    <img src="{{ asset('storage/' . $blog->images) }}" alt="Gambar Blog" class="object-cover w-20 h-20 rounded">
                                @else
                                    <span>-</span>
                                @endif
                            </td>
                            <td class="flex items-center justify-center px-4 py-2 space-x-2">
                                <!-- Tombol Edit -->
                                <a href="{{ route('bloging.edit', $blog->id) }}" class="flex items-center px-2 py-1 text-white bg-yellow-400 rounded hover:bg-yellow-500">
                                    Edit
                                </a>

                                <!-- Form Hapus -->
                                <form action="{{ route('bloging.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus blog ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="flex items-center px-2 py-1 text-white bg-red-500 rounded hover:bg-red-600">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session("success") }}',
            confirmButtonText: 'OK'
        });
    @endif
</script>

</x-app-layout>
