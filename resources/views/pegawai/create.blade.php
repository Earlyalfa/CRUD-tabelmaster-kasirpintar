<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray;">
    <div class="container mt-5">
        <h3 class="text-center">Tambah Pegawai</h3>
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_pegawai">ID Pegawai</label>
                <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value="{{ old('id_pegawai') }}" required>
            </div>
            <div class="form-group">
                <label for="nama_pegawai">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ old('nama_pegawai') }}" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
