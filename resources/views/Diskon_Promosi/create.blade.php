<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tambah Diskon/Promosi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Tambah Diskon/Promosi</h1>

        <form action="{{ route('diskon_promosi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="kode_promo" class="form-label">Kode Promo</label>
                <input type="text" name="kode_promo" id="kode_promo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nama_promo" class="form-label">Nama Promo</label>
                <input type="text" name="nama_promo" id="nama_promo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="barang_diskon" class="form-label">Barang yang Diskon</label>
                <input type="text" name="barang_diskon" id="barang_diskon" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jenis_diskon" class="form-label">Jenis Diskon</label>
                <input type="text" name="jenis_diskon" id="jenis_diskon" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_terjual" class="form-label">Jumlah Terjual</label>
                <input type="number" name="jumlah_terjual" id="jumlah_terjual" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="total_diskon" class="form-label">Total Diskon</label>
                <input type="number" step="0.01" name="total_diskon" id="total_diskon" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="total_penjualan" class="form-label">Total Penjualan</label>
                <input type="number" step="0.01" name="total_penjualan" id="total_penjualan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
            </div>

            <div class="d-flex justify-content-end">
            <a href="{{ route('diskon_promosi.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary ms-2">Tambah</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
