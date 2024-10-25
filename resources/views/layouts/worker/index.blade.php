<x-app-layout>

    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
          <div class="relative w-1/3">
            <input
              type="text"
              placeholder="Search"
              class="w-full px-10 py-2 text-gray-700 bg-gray-200 rounded-3xl focus:outline-none focus:ring-2 focus:ring-gray-400"
              />
            <div class="absolute inset-y-0 left-5 flex items-center pr-3">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </div>
          <button class="px-4 py-2 text-white bg-green-400 rounded-lg hover:bg-green-500">
            Tambah data
          </button>
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
                  <img class="w-10 h-10 rounded-full" src="path_to_image.jpg" alt="Foto">
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="flex space-x-2">
                        <button class="px-4 py-1 text-xs text-white bg-blue-400 rounded hover:bg-blue-500">Edit</button>
                        <button class="px-4 py-1 text-xs text-white bg-red-400 rounded hover:bg-red-500">Hapus</button>
                    </div>
                </td>
                @endforeach
              </tr>
              <!-- Repeat for other rows -->
            </tbody>
          </table>
        </div>
      </div>
</x-app-layout>
