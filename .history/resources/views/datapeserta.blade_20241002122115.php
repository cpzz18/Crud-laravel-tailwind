<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PESERTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mb-5 mt-3">Data Peserta</h1>
    <div class="container">
        <a href="/tambahpeserta" class="btn btn-primary">Tambah</a>
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <form action="/crud" method="GET">
                    <input type="search" id="inputPassword6" name="search" class="form-control"
                        aria-describedby="passwordHelpInline">
                </form>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">kelas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nik</th>
                            <th scope="col">No tlp</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($data as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + $data->firstItem() }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jeniskelamin }}</td>
                                <td>{{ $row->asalsekolah }}</td>
                                <td>{{ $row->kelas }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->nik }}</td>
                                <td>0{{ $row->notlp }}</td>
                                <td>
                                    <a href="/tampilandata/{{ $row->id }}" class="btn btn-warning">edit</a>
                                    <a href="/deletedata/{{ $row->id }}" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>
