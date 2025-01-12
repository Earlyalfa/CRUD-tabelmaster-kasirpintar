<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Pegawai</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('pegawai.create') }}" class="btn btn-success">Tambah Pegawai</a>
    </div>

    <table class="table table-bordered">
        <thead class="table-success">
        <tr>
            <th>Id</th>
            <th>Nama Pegawai</th>
            <th>Sift Awal</th>
            <th>Sift Akhir</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pegawais as $index => $pegawai)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pegawai->nama_pegawai }}</td>
                <td>{{ date('h:i A', strtotime($pegawai->sift_awal)) }}</td>
                <td>{{ date('h:i A', strtotime($pegawai->sift_akhir)) }}</td>
                <td>
                    <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pegawai ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
