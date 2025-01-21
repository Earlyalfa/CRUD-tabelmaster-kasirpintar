<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class= "mb-4">Daftar Diskon</h1>

        <div class="mb-3">
            <a href="{{ route('diskon.create') }}" class="btn btn-primary ">Tambah Diskon</a>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Dashboard</a>
        </div>

        <table class="table table-bordered">
            <thead class="table-primary ">
                <tr>
                    <th>Nama Diskon</th>
                    <th>Nilai</th>
                    <th>Minimal Pembelian</th>
                    <th>Periode</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diskon as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ 'Rp' . number_format($item->value, 0, ',', '.') }}</td>
                    <td>{{ $item->min_purchase ? 'Rp' . number_format($item->min_purchase, 0, ',', '.') : '-' }}</td>
                    <td>{{ $item->start_date }} - {{ $item->end_date }}</td>
                    <td>{{ $item->status ? 'Aktif' : 'Non-aktif' }}</td>
                    <td>
                        <a href="{{ route('diskon.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('diskon.destroy', $item->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus diskon ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal Notifikasi Sukses -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <!-- Ikon Centang -->
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="green" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 0 8 8A8 8 0 0 0 8 0zm3.354 6.354-3.5 3.5a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L8 8.293l3.146-3.147a.5.5 0 0 1 .708.708z"/>
                            </svg>
                        </div>
                        <!-- Pesan -->
                        <h5 class="fw-bold">Success!</h5>
                        <p>{{ session('success') }}</p>
                        <!-- Tombol -->
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Oke</button>
                    </div>
                </div>
            </div>
        </div>

        @if(session('success'))
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();
                });
            </script>
        @endif

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>     
    </div>
</body>
</html>
