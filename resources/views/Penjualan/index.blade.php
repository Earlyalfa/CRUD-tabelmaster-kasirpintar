<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class= "mb-4">Laporan Penjualan</h1>

    <div class="mb-3">
        <a href="{{ route('penjualan.create') }}" class="btn btn-primary">Tambah Laporan</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Dashboard</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Waktu</th>
                <th>No. Transaksi</th>
                <th>Nama Kasir</th>
                <th>Barang Terjual</th>
                <th>Total Harga</th>
                <th>Diskon</th>
                <th>Jumlah</th>
                <th>Metode Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $penjualan_item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penjualan_item->tanggal_waktu->format('Y-m-d') }}</td>
                    <td>{{ $penjualan_item->no_transaksi }}</td>
                    <td>{{ $penjualan_item->nama_kasir }}</td>
                    <td>
                        @php
                            $barang_terjual = json_decode($penjualan_item->barang_terjual);
                        @endphp
                        {{ implode(', ', $barang_terjual) }}
                    </td>
                    <td>Rp {{ number_format($penjualan_item->total_harga, 0, ',', '.') }}</td>
                    <td>{{ number_format($penjualan_item->diskon, 0) }}%</td>
                    <td>{{ $penjualan_item->jumlah }}</td>
                    <td>{{ $penjualan_item->metode_pembayaran }}</td>
                    <td>
                        <a href="{{ route('penjualan.edit', $penjualan_item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('penjualan.destroy', $penjualan_item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
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
