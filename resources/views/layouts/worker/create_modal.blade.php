<x-app-layout>
    <div class="container p-8 mx-auto">
        <h2 class="mb-6 text-2xl font-bold text-blue-600">Tambah Karyawan</h2>

        <!-- Form Tambah Karyawan -->
        <form action="{{ route('worker.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Input Nama -->
            <div class="flex flex-col space-y-2">
                <label for="name" class="font-medium text-gray-700">Nama</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan Nama"
                    required>
            </div>

            <!-- Input Email -->
            <div class="flex flex-col space-y-2">
                <label for="email" class="font-medium text-gray-700">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan Email"
                    required>
            </div>

            <!-- Input No HP -->
            <div class="flex flex-col space-y-2">
                <label for="phone" class="font-medium text-gray-700">No HP</label>
                <input
                    type="text"
                    id="phone"
                    name="phone"
                    class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan No HP"
                    required>
            </div>

            <!-- Input Password -->
            <div class="flex flex-col space-y-2">
                <label for="password" class="font-medium text-gray-700">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan Password"
                    required>
            </div>

            <!-- Input Foto -->
            <div class="flex flex-col space-y-2">
                <label for="photo" class="font-medium text-gray-700">Foto</label>
                <input
                    type="file"
                    id="photo"
                    name="photo"
                    class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    accept="image/*">
                <span class="text-sm text-gray-500">Format yang didukung: jpg, png, jpeg (maksimal 2MB)</span>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-3 text-white bg-green-500 rounded-md hover:bg-green-600">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <!-- Tambahkan SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: '{{ session("error") }}',
            confirmButtonText: 'Coba Lagi'
        });
    @endif
</script>

</x-app-layout>
