<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rekapitulasi Stok Bulanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Rekapitulasi Stok Bulanan</h1>

    <form action="{{ route('rekap.update', $rekap->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $rekap->kategori }}" required>
        </div>
        <div class="form-group">
            <label for="total_barang_masuk">Total Barang Masuk</label>
            <input type="number" class="form-control" id="total_barang_masuk" name="total_barang_masuk" value="{{ $rekap->total_barang_masuk }}" required>
        </div>
        <div class="form-group">
            <label for="total_terjual">Total Terjual</label>
            <input type="number" class="form-control" id="total_terjual" name="total_terjual" value="{{ $rekap->total_terjual }}" required>
        </div>
        <div class="form-group">
            <label for="total_rusak_hilang">Total Rusak/Hilang</label>
            <input type="number" class="form-control" id="total_rusak_hilang" name="total_rusak_hilang" value="{{ $rekap->total_rusak_hilang }}" required>
        </div>
        <div class="form-group">
            <label for="stok_akhir">Stok Akhir</label>
            <input type="number" class="form-control" id="stok_akhir" name="stok_akhir" value="{{ $rekap->stok_akhir }}" required>
        </div>
        
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
</div>
</body>
</html>
