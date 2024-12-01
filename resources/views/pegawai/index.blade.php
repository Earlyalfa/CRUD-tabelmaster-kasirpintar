@extends('layouts.app')

@section('title', 'Daftar Pegawai')

@section('content')
<h1>Daftar Pegawai</h1>
<a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pegawai</th>
            <th>Sift Awal</th>
            <th>Sift Akhir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pegawais as $pegawai)
        <tr>
            <td>{{ $pegawai->id }}</td>
            <td>{{ $pegawai->nama_pegawai }}</td>
            <td>{{ $pegawai->sift_awal }}</td>
            <td>{{ $pegawai->sift_akhir }}</td>
            <td>
                <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" style="display:inline;">
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
