<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PESERTA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl text-center font-bold underline mb-4">Data Peserta</h1>

        <div class="flex justify-between mb-4">
            <a href="/tambahpeserta"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah</a>
        </div>

        <div class="mt-4">
            <form action="/crud" method="GET" class="flex items-center">
                <input type="search" id="inputSearch" name="search"
                    class="border border-gray-300 rounded-lg p-2 w-full" placeholder="Cari data peserta" required>
                <button type="submit"
                    class="ml-2 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Cari</button>
            </form>
        </div>

        @if ($message = Session::get('success'))
            <div id="successMessage"
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 transition-opacity duration-500"
                role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const successMessage = document.getElementById('successMessage');
                        if (successMessage) {
                            setTimeout(() => {
                                successMessage.classList.add('opacity-0');
                                setTimeout(() => {
                                    successMessage.style.display = 'none';
                                }, 500);
                            }, 2000);
                        }
                    });
                </script>
        @endif


        <div class="overflow-x-auto mt-6">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">#</th>
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Jenis Kelamin</th>
                        <th class="py-3 px-6 text-left">Asal Sekolah</th>
                        <th class="py-3 px-6 text-left">Kelas</th>
                        <th class="py-3 px-6 text-left">Alamat</th>
                        <th class="py-3 px-6 text-left">NIK</th>
                        <th class="py-3 px-6 text-left">No Telp</th>
                        <th class="py-3 px-6 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($data as $index => $row)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $index + $data->firstItem() }}</td>
                            <td class="py-3 px-6 text-left">{{ $row->nama }}</td>
                            <td class="py-3 px-6 text-left">{{ $row->jeniskelamin }}</td>
                            <td class="py-3 px-6 text-left">{{ $row->asalsekolah }}</td>
                            <td class="py-3 px-6 text-left">{{ $row->kelas }}</td>
                            <td class="py-3 px-6 text-left">{{ $row->alamat }}</td>
                            <td class="py-3 px-6 text-left">{{ $row->nik }}</td>
                            <td class="py-3 px-6 text-left">0{{ $row->notlp }}</td>
                            <td class="py-3 px-6 text-left">
                                <a href="/tampilandata/{{ $row->id }}"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                                <a href="/deletedata/{{ $row->id }}"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</body>

</html>