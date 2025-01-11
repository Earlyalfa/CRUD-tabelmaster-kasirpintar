<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Suplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Suplier</h1>

        <!-- Tombol Tambah Suplier -->
        <a href="{{ route('suplier.create') }}" class="btn btn-primary mb-3">Tambah Suplier</a>

        <!-- Tabel Daftar Suplier -->
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Suplier</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($supliers as $suplier)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $suplier->nama }}</td>
                    <td>{{ $suplier->alamat }}</td>
                    <td>{{ $suplier->email ?? '-' }}</td>
                    <td>{{ $suplier->no_hp }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('suplier.edit', $suplier->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        
                        <!-- Form Hapus -->
                        <form action="{{ route('suplier.destroy', $suplier->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus suplier ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

