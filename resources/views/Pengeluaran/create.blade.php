<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengeluaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Pengeluaran</h1>

        <!-- Form Tambah -->
        <form action="{{ route('pengeluaran.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="jenis_pengeluaran" class="form-label">Jenis Pengeluaran</label>
                <input type="text" class="form-control" id="jenis_pengeluaran" name="jenis_pengeluaran" required>
            </div>
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal</label>
                <input type="number" class="form-control" id="nominal" name="nominal" required>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('pengeluaran.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
