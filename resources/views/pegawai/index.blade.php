<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray;">
    <div class="container mt-5">
        <h3 class="text-center my-4">Daftar Pegawai</h3>
        
        <!-- Tombol Tambah Pegawai -->
        <a href="{{ route('pegawai.create') }}" class="btn btn-success mb-3">Tambah Pegawai</a>
        
        <!-- Tabel Data Pegawai -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID Pegawai</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Sift Awal</th>
                    <th scope="col">Sift Akhir</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pegawais as $pegawai)
                    <tr>
                        <td>{{ $pegawai->id_pegawai }}</td>
                        <td>{{ $pegawai->nama_pegawai }}</td>
                        <td>{{ $pegawai->sift_awal }}</td>
                        <td>{{ $pegawai->sift_akhir }}</td>
                        <td class="text-center">
                            <!-- Tombol Edit -->
                            <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}" class="btn btn-primary btn-sm">Edit</a>

                            <!-- Form Hapus -->
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" 
                                  action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" 
                                  method="POST" 
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Data Pegawai tidak tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>

