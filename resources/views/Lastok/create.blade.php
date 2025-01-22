<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Stok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Stok</h1>

        <form action="{{ route('lastok.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode_barang" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" required>
            </div>
            <div class="mb-3">
                <label for="stok_awal" class="form-label">Stok Awal</label>
                <input type="number" class="form-control" id="stok_awal" name="stok_awal" required>
            </div>
            <div class="mb-3">
                <label for="barang_masuk" class="form-label">Barang Masuk</label>
                <input type="number" class="form-control" id="barang_masuk" name="barang_masuk" required>
            </div>
            <div class="mb-3">
                <label for="barang_terjual" class="form-label">Barang Terjual</label>
                <input type="number" class="form-control" id="barang_terjual" name="barang_terjual" required>
            </div>
            <div class="mb-3">
                <label for="barang_rusak_hilang" class="form-label">Barang Rusak/Hilang</label>
                <input type="number" class="form-control" id="barang_rusak_hilang" name="barang_rusak_hilang" required>
            </div>
            <div class="mb-3">
                <label for="stok_akhir" class="form-label">Stok Akhir</label>
                <input type="number" class="form-control" id="stok_akhir" name="stok_akhir" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan">
            </div>

        <div class="d-flex justify-content-end">
        <a href="{{ route('lastok.index') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary ms-2">Tambah</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
