<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengeluaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Pengeluaran</h1>

        <!-- Form Edit -->
        <form action="{{ route('pengeluaran.update', $pengeluaran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="jenis_pengeluaran" class="form-label">Jenis Pengeluaran</label>
                <input type="text" class="form-control" id="jenis_pengeluaran" name="jenis_pengeluaran" value="{{ $pengeluaran->jenis_pengeluaran }}" required>
            </div>
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal</label>
                <input type="number" class="form-control" id="nominal" name="nominal" value="{{ $pengeluaran->nominal }}" required>
            </div>
            <div class="text-end">
            <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
