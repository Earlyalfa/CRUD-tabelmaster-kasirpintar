<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index()
    {
        $supliers = Suplier::all();
        return view('suplier.index', compact('supliers'));
    }

    public function create()
    {
        return view('suplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'nullable|email',
            'no_hp' => 'required|string|max:15',
        ]);

        Suplier::create($request->all());
        return redirect()->route('suplier.index')->with('success', 'Suplier berhasil ditambahkan.');
    }

    public function show(Suplier $suplier)
    {
        return view('suplier.show', compact('suplier'));
    }

    public function edit(Suplier $suplier)
    {
        return view('suplier.edit', compact('suplier'));
    }

    public function update(Request $request, Suplier $suplier)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'nullable|email',
            'no_hp' => 'required|string|max:15',
        ]);

        $suplier->update($request->all());
        return redirect()->route('suplier.index')->with('success', 'Suplier berhasil diperbarui.');
    }

    public function destroy(Suplier $suplier)
    {
        $suplier->delete();
        return redirect()->route('suplier.index')->with('success', 'Suplier berhasil dihapus.');
    }
}

