<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Laporan Keuangan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
        <h1 class="text-center mb-4">Tambah Laporan Keuangan</h1>

        <form action="{{ route('keuangan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="mb-3">
                <label for="pendapatan" class="form-label">Pendapatan</label>
                <input type="number" class="form-control" id="pendapatan" name="pendapatan" required>
            </div>
            <div class="mb-3">
                <label for="pengeluaran" class="form-label">Pengeluaran</label>
                <input type="number" class="form-control" id="pengeluaran" name="pengeluaran" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" required>
            <div class="mb-3">
                <label for="profit_bersih" class="form-label">Profit Bersih</label>
                <input type="number" class="form-control" id="profit_bersih" name="profit_bersih" required>
            </div>
        <div class="d-flex justify-content-end">
        <a href="{{ route('keuangan.index') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary ms-2">Tambah</button>
    </form>

    <!-- Optional Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
