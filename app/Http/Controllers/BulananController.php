<?php

namespace App\Http\Controllers;

use App\Http\Resources\BulananResource;
use App\Models\Bulanan;
use Illuminate\Http\Request;

class BulananController extends Controller
{
    // Menampilkan semua data bulanan
    public function index()
    {
        $bulanan = Bulanan::all();
        return view('bulanan.index', compact('bulanan'));
    }

    // Menampilkan form untuk membuat data bulanan baru
    public function create()
    {
        return view('bulanan.create');
    }

    // Menyimpan data bulanan baru
    public function store(Request $request)
    {
        $request->validate([
            'bulan' => 'required|string',
            'pendapatan' => 'required|numeric',
            'pengeluaran' => 'required|numeric',
            'laba_kotor' => 'required|numeric',
            'profit_bersih' => 'required|numeric',
        ]);

        Bulanan::create([
            'bulan' => $request->bulan,
            'pendapatan' => $request->pendapatan,
            'pengeluaran' => $request->pengeluaran,
            'laba_kotor' => $request->laba_kotor,
            'profit_bersih' => $request->profit_bersih,
        ]);

        return redirect()->route('bulanan.index')->with('success', 'Data bulanan berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit data bulanan berdasarkan ID
    public function edit($id)
    {
        $bulanan = Bulanan::findOrFail($id);
        return view('bulanan.edit', compact('bulanan'));
    }

    // Mengupdate data bulanan berdasarkan ID
    public function update(Request $request, $id)
    {
        $request->validate([
            'bulan' => 'required|string',
            'pendapatan' => 'required|numeric',
            'pengeluaran' => 'required|numeric',
            'laba_kotor' => 'required|numeric',
            'profit_bersih' => 'required|numeric',
        ]);

        $bulanan = Bulanan::findOrFail($id);
        $bulanan->update([
            'bulan' => $request->bulan,
            'pendapatan' => $request->pendapatan,
            'pengeluaran' => $request->pengeluaran,
            'laba_kotor' => $request->laba_kotor,
            'profit_bersih' => $request->profit_bersih,
        ]);

        return redirect()->route('bulanan.index')->with('success', 'Data bulanan berhasil diupdate!');
    }

    // Menghapus data bulanan berdasarkan ID
    public function destroy($id)
    {
        $bulanan = Bulanan::findOrFail($id);
        $bulanan->delete();

        return redirect()->route('bulanan.index')->with('success', 'Data bulanan berhasil dihapus!');
    }
}

