<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container mt-5">
    <h1 class="text-center mb-4">Edit Transaksi</h1>

    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk:</label>
            <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="{{ $transaksi->nama_produk }}" required>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori:</label>
            <input type="text"class="form-control" name="kategori" id="kategori" value="{{ $transaksi->kategori }}" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah:</label>
            <input type="number"class="form-control" name="jumlah" id="jumlah" value="{{ $transaksi->jumlah }}" required>
        </div>
        <div class="mb-3">
            <label for="harga_satuan" class="form-label">Harga Satuan:</label>
            <input type="number" class="form-control" name="harga_satuan" id="harga_satuan" value="{{ $transaksi->harga_satuan }}" required>
        </div>
        <div class="mb-3">
            <label for="diskon" class="form-label">Diskon:</label>
            <input type="number" class="form-control" name="diskon" id="diskon" value="{{ $transaksi->diskon }}" required>
        </div>
        <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran:</label>
            <input type="text" class="form-control" name="metode_pembayaran" id="metode_pembayaran" value="{{ $transaksi->metode_pembayaran }}" required>
        </div>
        <div class="mb-3">
            <label for="status_pembayaran" class="form-label">Status Pembayaran:</label>
            <input type="text" class="form-control" name="status_pembayaran" id="status_pembayaran" value="{{ $transaksi->status_pembayaran }}" required>
        </div>

        <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
