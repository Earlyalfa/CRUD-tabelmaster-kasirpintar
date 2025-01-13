<?php

namespace App\Http\Controllers;

use App\Http\Resources\SuplierResource;
use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    // Menampilkan daftar suplier (GET)
    public function index()
    {
        $supliers = Suplier::all(); // Mengambil semua data suplier dari database
        return view('suplier.index', compact('supliers')); // Mengirim data ke tampilan
    }

    // Menampilkan form tambah suplier (GET)
    public function create()
    {
        return view('suplier.create'); // Menampilkan form tambah suplier
    }

    // Menyimpan suplier baru ke database (POST)
    public function store(Request $request)
    {
        // Validasi input data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'nullable|email',
            'no_hp' => 'required',
        ]);

        // Menyimpan data suplier baru ke database
        Suplier::create($request->all());

        return redirect()->route('suplier.index')->with('success', 'Suplier berhasil ditambahkan!');
    }

    // Menampilkan form edit suplier (GET)
    public function edit(Suplier $suplier)
    {
        return view('suplier.edit', compact('suplier')); // Menampilkan form edit untuk suplier tertentu
    }

    // Mengupdate data suplier (PUT)
    public function update(Request $request, Suplier $suplier)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'nullable|email',
            'no_hp' => 'required',
        ]);

        // Mengupdate data suplier di database
        $suplier->update($request->all());

        return redirect()->route('suplier.index')->with('success', 'Suplier berhasil diperbarui!');
    }

    // Menghapus suplier (DELETE)
    public function destroy($id)
    {
        $diskon = Suplier::findOrFail($id);
        $diskon->delete();
        return redirect()->route('suplier.index')->with('success', 'Diskon berhasil dihapus!');
    }
}
