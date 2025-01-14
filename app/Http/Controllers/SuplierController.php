<?php

namespace App\Http\Controllers;

use App\Http\Resources\SuplierResource;
use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    // Menampilkan daftar suplier 
    public function index()
    {
        $supliers = Suplier::all(); 
        return view('suplier.index', compact('supliers')); 
    }

    // Menampilkan form tambah suplier 
    public function create()
    {
        return view('suplier.create'); 
    }

    // Menyimpan suplier baru ke database 
    public function store(Request $request)
    {
        // Validasi input data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'nullable|email',
            'no_hp' => 'required',
        ]);

     
        Suplier::create($request->all());

        return redirect()->route('suplier.index')->with('success', 'Suplier berhasil ditambahkan!');
    }

    // Menampilkan form edit suplier 
    public function edit(Suplier $suplier)
    {
        return view('suplier.edit', compact('suplier')); 
    }

    // Mengupdate data suplier 
    public function update(Request $request, Suplier $suplier)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'nullable|email',
            'no_hp' => 'required',
        ]);

        $suplier->update($request->all());

        return redirect()->route('suplier.index')->with('success', 'Suplier berhasil diperbarui!');
    }

    // Menghapus suplier 
    public function destroy($id)
    {
        $diskon = Suplier::findOrFail($id);
        $diskon->delete();
        return redirect()->route('suplier.index')->with('success', 'Diskon berhasil dihapus!');
    }
}
