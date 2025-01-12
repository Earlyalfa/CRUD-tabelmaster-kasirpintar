<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Pegawai</h1>

        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" required>
            </div>
            <div class="mb-3">
                <label for="sift_awal" class="form-label">Sift Awal</label>
                <input type="time" class="form-control" id="sift_awal" name="sift_awal" value="{{ $pegawai->sift_awal }}" required>
            </div>
            <div class="mb-3">
                <label for="sift_akhir" class="form-label">Sift Akhir</label>
                <input type="time" class="form-control" id="sift_akhir" name="sift_akhir" value="{{ $pegawai->sift_akhir }}" required>
            </div>
            <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</body>
</html>
