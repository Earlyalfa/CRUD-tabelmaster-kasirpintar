<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    // Menampilkan daftar kategori produk
    public function index()
    {
        $kategoriProduks = KategoriProduk::all(); // Mendapatkan semua data kategori produk
        return view('kategori.index', compact('kategoriProduks'));
    }

    // Menampilkan form untuk membuat kategori baru
    public function create()
    {
        return view('kategori.create');
    }

    // Menyimpan kategori produk baru
    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|unique:kategori_produks|max:5',
            'nama_kategori' => 'required|string|max:255',
        ]);

        KategoriProduk::create($request->all()); // Menyimpan data kategori produk ke database

        return redirect()->route('kategori.index')->with('success', 'Kategori produk berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit kategori produk
    public function edit($id)
    {
        // Mengambil data kategori berdasarkan ID
        $kategoriProduk = KategoriProduk::findOrFail($id);
    
        // Mengirimkan data kategori ke view edit
        return view('kategori.edit', compact('kategoriProduk'));
    }
    

    // Mengupdate data kategori produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);
    
        // Mencari kategori berdasarkan ID
        $kategoriProduk = KategoriProduk::findOrFail($id);
    
        // Mengupdate data kategori
        $kategoriProduk->update($request->all());
    
        return redirect()->route('kategori.index')->with('success', 'Kategori produk berhasil diperbarui');
    }
    

    // Menghapus kategori produk
    public function destroy($id)
    {
        $kategoriProduk = KategoriProduk::findOrFail($id);
        $kategoriProduk->delete(); // Menghapus data kategori produk

        return redirect()->route('kategori.index')->with('success', 'Kategori produk berhasil dihapus');
    }
}
