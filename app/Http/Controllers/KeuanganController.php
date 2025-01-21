<?php

namespace App\Http\Controllers;

use App\Http\Resources\KeuanganResource;
use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    // Menampilkan semua data keuangan
    public function index()
    {
        $keuangan = Keuangan::all();
        return view('keuangan.index', compact('keuangan'));
    }

    // Menampilkan form untuk menambah data
    public function create()
    {
        return view('keuangan.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'pendapatan' => 'required|numeric',
            'pengeluaran' => 'required|numeric',
            'kategori' => 'required|string',
            'profit_bersih' => 'required|numeric',
        ]);
    
        // Simpan data ke database
        Keuangan::create($validatedData);
    
        // Redirect dengan pesan sukses
        return redirect()->route('keuangan.index')->with('success', 'Laporan berhasil ditambahkan.');
    }

    // Menampilkan data berdasarkan ID
    public function show($id)
    {
        $keuangan = Keuangan::findOrFail($id);
        return view('keuangan.show', compact('keuangan'));
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $keuangan = Keuangan::findOrFail($id);
        return view('keuangan.edit', compact('keuangan'));
    }

    // Mengupdate data berdasarkan ID
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'pendapatan' => 'required|numeric',
            'pengeluaran' => 'required|numeric',
            'kategori' => 'required|string',
            'profit_bersih' => 'required|numeric',
        ]);

        $keuangan = Keuangan::findOrFail($id);
        $keuangan->update($validated);

        return redirect()->route('keuangan.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Menghapus data berdasarkan ID
    public function destroy($id)
    {
        $keuangan = Keuangan::findOrFail($id);
        $keuangan->delete();

        return redirect()->route('keuangan.index')->with('success', 'Data berhasil dihapus!');
    }
}

