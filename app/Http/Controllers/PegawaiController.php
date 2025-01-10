<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Menampilkan semua pegawai
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    // Menampilkan form tambah pegawai
    public function create()
    {
        return view('pegawai.create');
    }

    // Menyimpan data pegawai baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|string',
            'sift_awal' => 'required|date_format:H:i',
            'sift_akhir' => 'required|date_format:H:i',
        ]);

        Pegawai::create($request->all());
        return redirect()->route('pegawai.index');
    }

    // Menampilkan form edit pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id); 
        return view('pegawai.edit', compact('pegawai')); 
    }
    

    // Mengupdate data pegawai
    public function update(Request $request, $id_pegawai)
    {
        $request->validate([
            'nama_pegawai' => 'required|string',
            'jabatan' => 'required|string',
            'sift_awal' => 'required|date_format:H:i',
            'sift_akhir' => 'required|date_format:H:i',
        ]);

        $pegawai = Pegawai::findOrFail($id_pegawai);
        $pegawai->update($request->all());
        return redirect()->route('pegawai.index');
    }

    // Menghapus pegawai
    public function destroy($id_pegawai)
    {
        Pegawai::destroy($id_pegawai);
        return redirect()->route('pegawai.index');
    }
}