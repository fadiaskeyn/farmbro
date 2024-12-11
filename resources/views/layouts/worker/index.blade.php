<x-app-layout>
    <div class="container p-6 mx-auto">
        <div class="flex items-center justify-between mb-4">
          <div class="relative w-1/3">
            <input
              type="text"
              placeholder="Search"
              class="w-full px-10 py-2 text-gray-700 bg-gray-200 rounded-md rounded-3xl focus:outline-none focus:ring-2 focus:ring-gray-400"
              />
            <div class="absolute inset-y-0 flex items-center pr-3 left-5">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </div>
          <div class="flex items-center justify-between mb-4">
            <a href="{{ route('worker.create') }}" class="flex items-center px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Tambah
            </a>
        </div>
        </div>

        <div class="overflow-x-auto">
          <table class="min-w-full bg-white border border-gray-200">
            <thead>
              <tr>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                  NO
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                  Nama
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                  Email
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                  No. Telp
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                  Foto
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($user as $users)
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $users->name }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $users->email }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $users->phone }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        @if ($users->photo)
                            <img class="w-10 h-10 rounded-full" src="{{ asset('storage/' . $users->photo) }}" alt="Foto {{ $users->name }}">
                        @else
                            <span class="text-gray-500">No Photo</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex space-x-2">
                            <a href="{{ route('worker.edit', $users->id) }}" class="px-4 py-1 text-xs text-white bg-blue-400 rounded hover:bg-blue-500">
                                Edit
                            </a>
                            <form action="{{ route('worker.destroy', $users->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-1 text-xs text-white bg-red-400 rounded hover:bg-red-500"
                                        onclick="return confirmDelete(event)">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{-- @include('layouts.worker.update_worker.blade') --}}
      <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

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

    function confirmDelete(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Data ini akan dihapus!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus!',
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.closest('form').submit();
            }
        });
    }
</script>
</x-app-layout>
