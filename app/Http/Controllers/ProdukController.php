<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $produks = Produk::with('kategori')->paginate(10); // Menambahkan paginasi 10 produk per halaman
        return view('Produk.index', compact('produks'));
    }
    

    // Menampilkan form tambah produk
    public function create()
    {
        $kategori = Kategori::all(); // Ambil semua kategori untuk dropdown
        return view('produk.create', compact('kategori'));
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kode_produk' => 'required|string|max:100',
            'kategori_id' => 'required|exists:kategori,id',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|integer',
            'unit' => 'required|string|max:50',
        ]);

        Produk::create($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Menampilkan form edit produk
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();
        return view('produk.edit', compact('produk', 'kategori'));
    }

    // Memperbarui produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kode_produk' => 'required|string|max:100',
            'kategori_id' => 'required|exists:kategori,id',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|integer',
            'unit' => 'required|string|max:50',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui!');
    }

    // Menghapus produk
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus!');
    }
}
