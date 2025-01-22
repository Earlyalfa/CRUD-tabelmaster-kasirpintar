<?php

namespace App\Http\Controllers;

use App\Http\Resources\DiskonPromosiResource;
use App\Models\DiskonPromosi;
use Illuminate\Http\Request;

class DiskonPromosiController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $diskonPromosi = DiskonPromosi::all();
        return view('diskon_promosi.index', compact('diskonPromosi'));
    }

    // Menampilkan form untuk menambahkan data baru
    public function create()
    {
        return view('diskon_promosi.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kode_promo' => 'required|string',
            'nama_promo' => 'required|string',
            'barang_diskon' => 'required|string',
            'jenis_diskon' => 'required|string',
            'jumlah_terjual' => 'required|integer',
            'total_diskon' => 'required|numeric',
            'total_penjualan' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        DiskonPromosi::create($request->all());
        return redirect()->route('diskon_promosi.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $diskonPromosi = DiskonPromosi::findOrFail($id);
        return view('diskon_promosi.edit', compact('diskonPromosi'));
    }

    // Mengupdate data
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kode_promo' => 'required|string',
            'nama_promo' => 'required|string',
            'barang_diskon' => 'required|string',
            'jenis_diskon' => 'required|string',
            'jumlah_terjual' => 'required|integer',
            'total_diskon' => 'required|numeric',
            'total_penjualan' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        $diskonPromosi = DiskonPromosi::findOrFail($id);
        $diskonPromosi->update($request->all());
        return redirect()->route('diskon_promosi.index')->with('success', 'Data berhasil diupdate!');
    }

    // Menghapus data
    public function destroy($id)
    {
        $diskonPromosi = DiskonPromosi::findOrFail($id);
        $diskonPromosi->delete();
        return redirect()->route('diskon_promosi.index')->with('success', 'Data berhasil dihapus!');
    }
}
