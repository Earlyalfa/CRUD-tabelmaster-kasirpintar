<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pendapatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Pendapatan</h1>

        <!-- Form Tambah -->
        <form action="{{ route('pendapatan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="mb-3">
                <label for="no_transaksi" class="form-label">No Transaksi</label>
                <input type="text" class="form-control" id="no_transaksi" name="no_transaksi" required>
            </div>
            <div class="mb-3">
                <label for="pendapatan" class="form-label">Pendapatan</label>
                <input type="number" class="form-control" id="pendapatan" name="pendapatan" required>
            </div>
            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <input type="text" class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
            </div>
            <div class="d-flex justify-content-end">
        <a href="{{ route('pendapatan.index') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary ms-2">Tambah</button>
    </form>
    </div>
</body>
</html>
