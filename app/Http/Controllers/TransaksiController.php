<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Resources\TransaksiResource;

class TransaksiController extends Controller
{
    public function index()
    {
        // Mendapatkan semua transaksi dari database
        $transaksis = Transaksi::all();
        // Mengembalikan view dengan data transaksi
        return view('transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat transaksi baru
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan dari form
        $validatedData = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'id_produk' => 'required|integer',
            'nama_produk' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'total_transaksi' => 'required|numeric',
            'status_pembayaran' => 'required|in:Lunas,Hutang',
        ]);

        // Menyimpan transaksi ke dalam database
        Transaksi::create($validatedData);

        // Redirect ke halaman daftar transaksi setelah berhasil
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dibuat!');
    }

    public function show($id)
    {
        // Menampilkan detail transaksi berdasarkan ID
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit($id)
    {
        // Menampilkan form untuk mengedit transaksi yang sudah ada
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan dari form
        $validatedData = $request->validate([
            'tanggal_transaksi' => 'required|date',
            'id_produk' => 'required|integer',
            'nama_produk' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'harga_satuan' => 'required|numeric',
            'total_transaksi' => 'required|numeric',
            'status_pembayaran' => 'required|in:Lunas,Hutang',
        ]);

        // Mendapatkan transaksi yang akan diupdate
        $transaksi = Transaksi::findOrFail($id);
        // Memperbarui data transaksi
        $transaksi->update($validatedData);

        // Redirect ke halaman daftar transaksi setelah berhasil
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Mendapatkan transaksi yang akan dihapus
        $transaksi = Transaksi::findOrFail($id);
        // Menghapus transaksi dari database
        $transaksi->delete();

        // Redirect ke halaman daftar transaksi setelah berhasil dihapus
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus!');
    }
}
