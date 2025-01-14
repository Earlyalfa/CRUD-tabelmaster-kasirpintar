<?php

namespace App\Http\Controllers;

use App\Http\Resources\PegawaiResource;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    // Menampilkan daftar pegawai
    public function index()
    {
        $pegawais = Pegawai::all();  
        return view('pegawai.index', compact('pegawais'));  
    }

    // Menampilkan form untuk menambahkan pegawai baru
    public function create()
    {
        return view('pegawai.create');  
    }

    // Menyimpan data pegawai baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'sift_awal' => 'required|date_format:H:i',  
            'sift_akhir' => 'required|date_format:H:i', 
        ]);

        Pegawai::create($request->all()); 
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);  
        return view('pegawai.edit', compact('pegawai'));  
    }

    // Memperbarui data pegawai
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'sift_awal' => 'required|date_format:H:i',  
            'sift_akhir' => 'required|date_format:H:i', 
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    // Menghapus pegawai
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);  
        $pegawai->delete();  
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}
