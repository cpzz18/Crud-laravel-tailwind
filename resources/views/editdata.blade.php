@extends('layout.template')

@section('content')
 <!-- Header -->
 <header>
    <h1 class="text-center text-3xl font-bold mb-5 mt-3">Edit Data Peserta</h1>
</header>

<!-- content -->
<main class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-1/2">
            <div class="bg-white shadow-md rounded-lg p-6">
                <!-- Formulir Edit Data Peserta -->
                <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="nama" value="{{ $data->nama }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="jeniskelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                        <select name="jeniskelamin" class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="jeniskelamin" required>
                            <option value="cowo" {{ $data->jeniskelamin == 'cowo' ? 'selected' : '' }}>Cowo</option>
                            <option value="cewe" {{ $data->jeniskelamin == 'cewe' ? 'selected' : '' }}>Cewe</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="asalsekolah" class="block text-sm font-medium text-gray-700">Asal Sekolah</label>
                        <input type="text" name="asalsekolah" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="asalsekolah" value="{{ $data->asalsekolah }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                        <input type="text" name="kelas" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="kelas" value="{{ $data->kelas }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input type="text" name="alamat" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="alamat" value="{{ $data->alamat }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                        <input type="number" name="nik" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="nik" value="{{ $data->nik }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="notlp" class="block text-sm font-medium text-gray-700">No Telepon</label>
                        <input type="number" name="notlp" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="notlp" value="{{ $data->notlp }}" required>
                    </div>

                    <!-- Tombol Kirim  dan kembali -->
                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Kirim</button>
                    <a href="/" class="block text-center mt-4 bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</main>
