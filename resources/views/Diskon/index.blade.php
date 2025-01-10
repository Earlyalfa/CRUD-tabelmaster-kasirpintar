<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-4">
        <h1>Daftar Diskon</h1>
        <a href="{{ route('diskon.create') }}" class="btn btn-primary mb-3">Tambah Diskon</a>
        <table class="table table-bordered">
            <thead>
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
                        <form action="{{ route('diskon.destroy', $item->id) }}" method="POST" style="display:inline;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
