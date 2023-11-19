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
    <h1 class="text-center mb-5 mt-3">edit data Peserta</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->nama }}">
                            </div>
                            <label for="exampleInputEmail1" class="form-label">Jenis kelamin</label>
                            <select class="form-select mb-2" name="jeniskelamin" aria-label="Default select example">
                                <option value="cowo">Cowo</option>
                                <option value="cewe">Cewe</option>
                            </select>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
                                <input type="text" name="asalsekolah" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->asalsekolah }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->kelas }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nik</label>
                                <input type="number" name="nik" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->nik }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                <input type="number" name="notlp" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->notlp }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
