<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Penjualan</h1>
    
    <!-- Form to update the penjualan record -->
    <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="tanggal_waktu" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal_waktu" name="tanggal_waktu" value="{{ $penjualan->tanggal_waktu }}" required>
        </div>

        <div class="mb-3">
            <label for="no_transaksi" class="form-label">No. Transaksi</label>
            <input type="text" class="form-control" id="no_transaksi" name="no_transaksi" value="{{ $penjualan->no_transaksi }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_kasir" class="form-label">Nama Kasir</label>
            <input type="text" class="form-control" id="nama_kasir" name="nama_kasir" value="{{ $penjualan->nama_kasir }}" required>
        </div>

        <div class="mb-3">
            <label for="barang_terjual" class="form-label">Barang Terjual</label>
            <textarea class="form-control" id="barang_terjual" name="barang_terjual" rows="3" required>{{ implode(', ', json_decode($penjualan->barang_terjual)) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <input type="text" class="form-control" id="metode_pembayaran" name="metode_pembayaran" value="{{ $penjualan->metode_pembayaran }}" required>
        </div>

        <div class="mb-3">
            <label for="diskon" class="form-label">Diskon (%)</label>
            <input type="number" class="form-control" id="diskon" name="diskon" value="{{ $penjualan->diskon }}" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="total_harga" class="form-label">Total Harga</label>
            <input type="number" class="form-control" id="total_harga" name="total_harga" value="{{ $penjualan->total_harga }}" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $penjualan->jumlah }}" required>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
