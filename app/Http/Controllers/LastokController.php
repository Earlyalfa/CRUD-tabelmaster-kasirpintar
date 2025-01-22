<?php

namespace App\Http\Controllers;

use App\Http\Resources\LastokResource;
use App\Models\Lastok;
use Illuminate\Http\Request;

class LastokController extends Controller
{
    // Display all records
    public function index()
    {
        $lastok = Lastok::all();
        return view('lastok.index', compact('lastok'));
    }

    // Show form to create a new record
    public function create()
    {
        return view('lastok.create');
    }

    // Store new record in the database
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'stok_awal' => 'required|integer',
            'barang_masuk' => 'required|integer',
            'barang_terjual' => 'required|integer',
            'barang_rusak_hilang' => 'required|integer',
            'stok_akhir' => 'required|integer',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Lastok::create($request->all());
        return redirect()->route('lastok.index')->with('success', 'Data successfully added!');
    }

    // Show form to edit a record
    public function edit($id)
    {
        $lastok = Lastok::findOrFail($id);
        return view('lastok.edit', compact('lastok'));
    }

    // Update a record
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'stok_awal' => 'required|integer',
            'barang_masuk' => 'required|integer',
            'barang_terjual' => 'required|integer',
            'barang_rusak_hilang' => 'required|integer',
            'stok_akhir' => 'required|integer',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $lastok = Lastok::findOrFail($id);
        $lastok->update($request->all());
        return redirect()->route('lastok.index')->with('success', 'Data successfully updated!');
    }

    // Delete a record
    public function destroy($id)
    {
        $lastok = Lastok::findOrFail($id);
        $lastok->delete();
        return redirect()->route('lastok.index')->with('success', 'Data successfully deleted!');
    }
}

