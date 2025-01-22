<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rekapitulasi Stok Bulanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Tambah Rekapitulasi Stok Bulanan</h1>

    <form action="{{ route('rekap.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" required>
        </div>
        <div class="form-group">
            <label for="total_barang_masuk">Total Barang Masuk</label>
            <input type="number" class="form-control" id="total_barang_masuk" name="total_barang_masuk" required>
        </div>
        <div class="form-group">
            <label for="total_terjual">Total Terjual</label>
            <input type="number" class="form-control" id="total_terjual" name="total_terjual" required>
        </div>
        <div class="form-group">
            <label for="total_rusak_hilang">Total Rusak/Hilang</label>
            <input type="number" class="form-control" id="total_rusak_hilang" name="total_rusak_hilang" required>
        </div>
        <div class="form-group">
            <label for="stok_akhir">Stok Akhir</label>
            <input type="number" class="form-control" id="stok_akhir" name="stok_akhir" required>
        </div>

        <div class="d-flex justify-content-end">
        <a href="{{ route('rekap.index') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary ms-2">Tambah</button>
    </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
