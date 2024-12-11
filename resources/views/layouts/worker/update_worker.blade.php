<x-app-layout>\
    <div class="container p-8 mx-auto">
        <h2 class="mb-6 text-2xl font-bold text-blue-600">Edit Karyawan</h2>
        <form action="{{ route('worker.update', $userW->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name', $userW->name) }}" class="block w-full mt-1">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $userW->email) }}" class="block w-full mt-1">
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', $userW->phone) }}" class="block w-full mt-1">
            </div>

            <div class="mb-4">
                <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>
                <input type="file" id="photo" name="photo" class="block w-full mt-1">
                @if($userW->photo)
                    <img src="{{ asset('storage/' . $userW->photo) }}" alt="Foto Profil" class="w-20 h-20 mt-2 rounded-full">
                @endif
            </div>

            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Perbarui</button>
        </form>
    </div>
</x-app-layout>
















