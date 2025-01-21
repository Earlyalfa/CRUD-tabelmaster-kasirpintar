<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Tambah Kategori</h1>

        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kategori" class="form-label">Nama Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Masukkan nama kategori" required>
            </div>

            <div class="d-flex justify-content-end">
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary ms-2">Tambah</button>
        </form>
    </div>
</body>
</html>

