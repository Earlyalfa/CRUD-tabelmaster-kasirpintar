<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Tambah Pegawai</h1>

        <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control @error('nama_pegawai') is-invalid @enderror" id="nama_pegawai" name="nama_pegawai" required>
            @error('nama_pegawai')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sift_awal" class="form-label">Sift Awal</label>
            <input type="time" class="form-control @error('sift_awal') is-invalid @enderror" id="sift_awal" name="sift_awal" required>
            @error('sift_awal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sift_akhir" class="form-label">Sift Akhir</label>
            <input type="time" class="form-control @error('sift_akhir') is-invalid @enderror" id="sift_akhir" name="sift_akhir" required>
            @error('sift_akhir')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-end">
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-success ms-2">Tambah</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
