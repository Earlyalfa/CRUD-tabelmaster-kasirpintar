<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Laravel')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <header>
            <h1 class="mb-4">Manajemen Data</h1>
            <nav class="mb-4">
                <a href="{{ route('suplier.index') }}" class="btn btn-primary">Suplier</a>
                <a href="{{ route('product.index') }}" class="btn btn-secondary">Produk</a>
                <a href="{{ route('kategori.index') }}" class="btn btn-success">Kategori</a>
                <a href="{{ route('pegawai.index') }}" class="btn btn-danger">Pegawai</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
