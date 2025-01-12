<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    // Menampilkan daftar pegawai
    public function index()
    {
        $pegawais = Pegawai::all();  // Mengambil semua data pegawai dari database
        return view('pegawai.index', compact('pegawais'));  // Mengirim data pegawai ke view
    }

    // Menampilkan form untuk menambahkan pegawai baru
    public function create()
    {
        return view('pegawai.create');  // Menampilkan halaman form tambah pegawai
    }

    // Menyimpan data pegawai baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'sift_awal' => 'required|date_format:H:i:s',
            'sift_akhir' => 'required|date_format:H:i:s',
        ]);
        Pegawai::create($request->all());  // Menyimpan pegawai baru ke database
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);  // Mencari pegawai berdasarkan ID
        return view('pegawai.edit', compact('pegawai'));  // Menampilkan halaman edit pegawai
    }

    // Memperbarui data pegawai
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'sift_awal' => 'required|date_format:H:i:s',
            'sift_akhir' => 'required|date_format:H:i:s',
        ]);
        
        $pegawai = Pegawai::findOrFail($id);  // Mencari pegawai berdasarkan ID
        $pegawai->update($request->all());  // Memperbarui data pegawai di database
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    // Menghapus pegawai
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);  // Mencari pegawai berdasarkan ID
        $pegawai->delete();  // Menghapus pegawai dari database
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}
