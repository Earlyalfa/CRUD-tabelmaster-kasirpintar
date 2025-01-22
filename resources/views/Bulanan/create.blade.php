<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Bulanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Bulanan</h1>

        <form action="{{ route('bulanan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="bulan" class="form-label">Bulan</label>
                <input type="text" class="form-control" id="bulan" name="bulan" required>
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
                <label for="laba_kotor" class="form-label">Laba Kotor</label>
                <input type="number" class="form-control" id="laba_kotor" name="laba_kotor" required>
            </div>
            <div class="mb-3">
                <label for="profit_bersih" class="form-label">Profit Bersih</label>
                <input type="number" class="form-control" id="profit_bersih" name="profit_bersih" required>
            </div>

            <div class="d-flex justify-content-end">
            <a href="{{ route('bulanan.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary ms-2">Tambah</button>
            </div>
      </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
