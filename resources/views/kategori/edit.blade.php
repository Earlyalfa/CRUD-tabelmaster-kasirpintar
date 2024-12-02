<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kategori Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h3>Edit Kategori Produk</h3>
        <form action="{{ route('kategori.update', $kategoriProduk->id_kategori) }}" method="POST">
            @csrf
            @method('PUT')
            
            <!-- Input ID Kategori, yang tidak bisa diubah -->
            <div class="form-group">
                <label for="id_kategori">ID Kategori</label>
                <input type="text" name="id_kategori" class="form-control" value="{{ $kategoriProduk->id_kategori }}" readonly>
            </div>

            <!-- Input Nama Kategori -->
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" value="{{ $kategoriProduk->nama_kategori }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Kategori</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>
