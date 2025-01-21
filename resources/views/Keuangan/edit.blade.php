<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laporan Keuangan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Laporan Keuangan</h1>

        <form action="{{ route('keuangan.update', $keuangan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $keuangan->tanggal }}" required>
            </div>
            <div class="mb-3">
                <label for="pendapatan" class="form-label">Pendapatan</label>
                <input type="number" class="form-control" id="pendapatan" name="pendapatan" value="{{ $keuangan->pendapatan }}" required>
            </div>
            <div class="mb-3">
                <label for="pengeluaran" class="form-label">Pengeluaran</label>
                <input type="number" class="form-control" id="pengeluaran" name="pengeluaran" value="{{ $keuangan->pengeluaran }}" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $keuangan->kategori }}" required>
            </div>
            <div class="mb-3">
                <label for="profit_bersih" class="form-label">Profit Bersih</label>
                <input type="number" class="form-control" id="profit_bersih" name="profit_bersih" value="{{ $keuangan->profit_bersih }}" required>
            </div>
            <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
