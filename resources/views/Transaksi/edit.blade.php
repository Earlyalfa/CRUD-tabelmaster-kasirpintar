<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Edit Transaksi</h1>
        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                <input type="date" name="tanggal_transaksi" class="form-control" value="{{ $transaksi->tanggal_transaksi }}" required>
            </div>
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="{{ $transaksi->nama_produk }}" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ $transaksi->kategori }}" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" value="{{ $transaksi->jumlah }}" required>
            </div>
            <div class="mb-3">
                <label for="harga_satuan" class="form-label">Harga Satuan</label>
                <input type="number" name="harga_satuan" class="form-control" value="{{ $transaksi->harga_satuan }}" required>
            </div>
            <div class="mb-3">
                <label for="sub_total" class="form-label">Sub Total</label>
                <input type="number" name="sub_total" class="form-control" value="{{ $transaksi->sub_total }}" required>
            </div>
            <div class="mb-3">
                <label for="total_transaksi" class="form-label">Total Transaksi</label>
                <input type="number" name="total_transaksi" class="form-control" value="{{ $transaksi->total_transaksi }}" required>
            </div>
            <div class="mb-3">
                <label for="diskon" class="form-label">Diskon</label>
                <input type="number" name="diskon" class="form-control" value="{{ $transaksi->diskon }}" required>
            </div>
            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <input type="text" name="metode_pembayaran" class="form-control" value="{{ $transaksi->metode_pembayaran }}" required>
            </div>
            <div class="mb-3">
                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                <input type="text" name="status_pembayaran" class="form-control" value="{{ $transaksi->status_pembayaran }}" required>
            </div>
            <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
