<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Tambah Produk</h1>

        <form action="{{ route('produk.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kode_produk" class="form-label">Kode Produk</label>
                <input type="text" name="kode_produk" id="kode_produk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select name="kategori_id" id="kategori_id" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($kategori as $kat)
                        <option value="{{ $kat->id }}">{{ $kat->kategori }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="harga_beli" class="form-label">Harga Beli</label>
                <input type="number" name="harga_beli" id="harga_beli" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="harga_jual" class="form-label">Harga Jual</label>
                <input type="number" name="harga_jual" id="harga_jual" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" name="stok" id="stok" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="unit" class="form-label">Unit</label>
                <input type="text" name="unit" id="unit" class="form-control" required>
            </div>

            <div class="d-flex justify-content-end">
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success ms-2">Tambah</button>
        </form>
    </div>
</body>
</html>
