<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Kategori</h1>

        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="kategori" class="form-label">Nama Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="{{ $kategori->kategori }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
