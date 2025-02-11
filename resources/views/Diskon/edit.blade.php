<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Diskon</h1>
        <form action="{{ route('diskon.update', $diskon->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Diskon</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $diskon->name }}" required>
            </div>
            <div class="mb-3">
                <label for="value" class="form-label">Nilai Diskon</label>
                <input type="number" name="value" id="value" class="form-control" value="{{ $diskon->value }}" required>
            </div>
            <div class="mb-3">
                <label for="min_purchase" class="form-label">Minimal Pembelian</label>
                <input type="number" name="min_purchase" id="min_purchase" class="form-control" value="{{ $diskon->min_purchase }}">
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Tanggal Mulai</label>
                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $diskon->start_date }}" required>
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">Tanggal Selesai</label>
                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $diskon->end_date }}" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="1" {{ $diskon->status ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ !$diskon->status ? 'selected' : '' }}>Non-aktif</option>
                </select>
            </div>

            <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
