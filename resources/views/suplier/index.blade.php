@extends('layouts.app')

@section('title', 'Daftar Suplier')

@section('content')
<h1>Daftar Suplier</h1>
<a href="{{ route('suplier.create') }}" class="btn btn-primary">Tambah Suplier</a>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($supliers as $suplier)
        <tr>
            <td>{{ $suplier->id }}</td>
            <td>{{ $suplier->nama }}</td>
            <td>{{ $suplier->alamat }}</td>
            <td>{{ $suplier->email }}</td>
            <td>{{ $suplier->no_hp }}</td>
            <td>
                <a href="{{ route('suplier.edit', $suplier->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('suplier.destroy', $suplier->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
