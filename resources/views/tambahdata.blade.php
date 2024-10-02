<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PESERTA</title>
    <!-- import tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Header -->
    <header>
        <h1 class="text-center text-3xl font-bold mb-5 mt-3">Tambah Data Peserta</h1>
    </header>

    <!-- Content -->
    <main class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-1/2">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <!-- Formulir Tambah Data Peserta -->
                    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" name="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="nama" required>
                        </div>

                        <div class="mb-4">
                            <label for="jeniskelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select name="jeniskelamin" class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="jeniskelamin" required>
                                <option value="cowo">Cowo</option>
                                <option value="cewe">Cewe</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="asalsekolah" class="block text-sm font-medium text-gray-700">Asal Sekolah</label>
                            <input type="text" name="asalsekolah" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="asalsekolah" required>
                        </div>

                        <div class="mb-4">
                            <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                            <input type="text" name="kelas" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="kelas" required>
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                            <input type="text" name="alamat" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="alamat" required>
                        </div>

                        <div class="mb-4">
                            <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                            <input type="number" name="nik" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="nik" required>
                        </div>

                        <div class="mb-4">
                            <label for="notlp" class="block text-sm font-medium text-gray-700">No Telepon</label>
                            <input type="number" name="notlp" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="notlp" required>
                        </div>

                        <!--  Kirim -->
                        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Kirim</button>
                        <a href="/" class="block text-center mt-4 bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="text-center mt-5">
        <p class="text-sm text-gray-500">Laravel Tailwind © 2024</p>
    </footer>
</body>

</html>
