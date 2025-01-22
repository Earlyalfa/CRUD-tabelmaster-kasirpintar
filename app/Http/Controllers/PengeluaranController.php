<?php

namespace App\Http\Controllers;

use App\Http\Resources\PengeluaranResource;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    // Menampilkan semua data pengeluaran
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        return view('pengeluaran.index', compact('pengeluaran'));
    }

    // Menampilkan form untuk membuat pengeluaran baru
    public function create()
    {
        return view('pengeluaran.create');
    }

    // Menyimpan pengeluaran baru
    public function store(Request $request)
    {
        $request->validate([
            'jenis_pengeluaran' => 'required|string',
            'nominal' => 'required|numeric',
        ]);

        Pengeluaran::create([
            'jenis_pengeluaran' => $request->jenis_pengeluaran,
            'nominal' => $request->nominal,
        ]);

        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran berhasil ditambahkan!');
    }

    // Menampilkan detail pengeluaran berdasarkan ID
    public function show($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('pengeluaran.show', compact('pengeluaran'));
    }

    // Menampilkan form untuk mengedit pengeluaran berdasarkan ID
    public function edit($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('pengeluaran.edit', compact('pengeluaran'));
    }

    // Mengupdate pengeluaran berdasarkan ID
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_pengeluaran' => 'required|string',
            'nominal' => 'required|numeric',
        ]);

        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->update([
            'jenis_pengeluaran' => $request->jenis_pengeluaran,
            'nominal' => $request->nominal,
        ]);

        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran berhasil diupdate!');
    }

    // Menghapus pengeluaran berdasarkan ID
    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->delete();

        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran berhasil dihapus!');
    }
}

