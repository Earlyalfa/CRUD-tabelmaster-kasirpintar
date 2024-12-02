<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    // Menampilkan daftar kategori produk
    public function index()
    {
        $kategoriProduks = KategoriProduk::all(); 
        return view('kategori.index', compact('kategoriProduks'));
    }


    public function create()
    {
        return view('kategori.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|unique:kategori_produks|max:5',
            'nama_kategori' => 'required|string|max:255',
        ]);

        KategoriProduk::create($request->all()); // Menyimpan data kategori produk ke database

        return redirect()->route('kategori.index')->with('success', 'Kategori produk berhasil ditambahkan');
    }

   
    public function edit($id)
    {
        // Mengambil data kategori berdasarkan ID
        $kategoriProduk = KategoriProduk::findOrFail($id);
    
        // Mengirimkan data kategori ke view edit
        return view('kategori.edit', compact('kategoriProduk'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);
    
        // Mencari ID
        $kategoriProduk = KategoriProduk::findOrFail($id);
    
        $kategoriProduk->update($request->all());
    
        return redirect()->route('kategori.index')->with('success', 'Kategori produk berhasil diperbarui');
    }
    

    // Menghapus 
    public function destroy($id)
    {
        $kategoriProduk = KategoriProduk::findOrFail($id);
        $kategoriProduk->delete(); 

        return redirect()->route('kategori.index')->with('success', 'Kategori produk berhasil dihapus');
    }
}
