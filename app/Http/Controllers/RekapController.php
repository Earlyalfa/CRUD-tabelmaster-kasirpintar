<?php

namespace App\Http\Controllers;

use App\Http\Resources\RekapResource;
use App\Models\Rekap;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    // Display the list of records
    public function index()
    {
        $rekap = Rekap::all();
        return view('rekap.index', compact('rekap'));
    }

    // Show the form to create a new record
    public function create()
    {
        return view('rekap.create');
    }

    // Store a new record
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string',
            'total_barang_masuk' => 'required|integer',
            'total_terjual' => 'required|integer',
            'total_rusak_hilang' => 'required|integer',
            'stok_akhir' => 'required|integer',
        ]);

        Rekap::create($request->all());
        return redirect()->route('rekap.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Show the form to edit an existing record
    public function edit($id)
    {
        $rekap = Rekap::findOrFail($id);
        return view('rekap.edit', compact('rekap'));
    }

    // Update an existing record
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required|string',
            'total_barang_masuk' => 'required|integer',
            'total_terjual' => 'required|integer',
            'total_rusak_hilang' => 'required|integer',
            'stok_akhir' => 'required|integer',
        ]);

        $rekap = Rekap::findOrFail($id);
        $rekap->update($request->all());
        return redirect()->route('rekap.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Delete a record
    public function destroy($id)
    {
        $rekap = Rekap::findOrFail($id);
        $rekap->delete();
        return redirect()->route('rekap.index')->with('success', 'Data berhasil dihapus!');
    }
}
