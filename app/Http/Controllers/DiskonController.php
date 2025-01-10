<?php

namespace App\Http\Controllers;

use App\Models\Diskon;
use Illuminate\Http\Request;

class DiskonController extends Controller
{
    // Menampilkan semua data diskon
    public function index()
    {
        $diskon = Diskon::all();
        return view('diskon.index', compact('diskon'));
    }

    // Menampilkan form tambah diskon
    public function create()
    {
        return view('diskon.create');
    }

    // Menyimpan data diskon baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'value' => 'required|numeric',
            'min_purchase' => 'nullable|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|boolean',
        ]);

        Diskon::create($request->all());
        return redirect()->route('diskon.index')->with('success', 'Diskon berhasil ditambahkan!');
    }

    // Menampilkan form edit diskon
    public function edit($id)
    {
        $diskon = Diskon::findOrFail($id);
        return view('diskon.edit', compact('diskon'));
    }

    // Mengupdate data diskon
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'value' => 'required|numeric',
            'min_purchase' => 'nullable|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|boolean',
        ]);

        $diskon = Diskon::findOrFail($id);
        $diskon->update($request->all());
        return redirect()->route('diskon.index')->with('success', 'Diskon berhasil diperbarui!');
    }

    // Menghapus data diskon
    public function destroy($id)
    {
        $diskon = Diskon::findOrFail($id);
        $diskon->delete();
        return redirect()->route('diskon.index')->with('success', 'Diskon berhasil dihapus!');
    }
}

