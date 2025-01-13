<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Transaksi</h1>

        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a>
        </div>

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                <th>No</th>
                <th>Tanggal Transaksi</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Sub Total</th>
                <th>Total Transaksi</th>
                <th>Diskon</th>
                <th>Metode Pembayaran</th>
                <th>Status Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksis as $key => $item)
                <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $item->tanggal_transaksi }}</td> 
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->harga_satuan }}</td>
                    <td>{{ $item->sub_total }}</td>
                    <td>{{ $item->total_transaksi }}</td>
                    <td>{{ $item->diskon }}</td>
                    <td>{{ $item->metode_pembayaran }}</td>
                    <td>{{ $item->status_pembayaran }}</td>
                    <td>
                    <a href="{{ route('transaksi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('transaksi.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
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

            <!-- Bootstrap JS (Optional) -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        </div>
</body>
</html>

