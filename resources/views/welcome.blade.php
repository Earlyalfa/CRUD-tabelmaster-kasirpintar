<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Kasir Pintar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Selamat Datang di Aplikasi Kasir Pintar!</h1>
        <p class="lead text-center">Sistem Kasir untuk mengelola produk dan transaksi dengan mudah.</p>

        <div class="text-center">
            <a href="{{ route('produks.index') }}" class="btn btn-primary">Lihat Daftar Produk</a>
            <a href="{{ route('produks.create') }}" class="btn btn-success">Tambah Produk Baru</a>
        </div>

        <div class="mt-5 text-center">
            <p>&copy; {{ date('Y') }} Kasir Pintar. Semua hak cipta dilindungi.</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

