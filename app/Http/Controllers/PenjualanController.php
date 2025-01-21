<?php

namespace App\Http\Controllers;

use App\Http\Resources\PenjualanResource;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan'));
    }

    public function create()
    {
        return view('penjualan.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'tanggal_waktu' => 'required|date',
            'no_transaksi' => 'required|string|max:255',
            'nama_kasir' => 'required|string|max:255',
            'barang_terjual' => 'required|string',
            'metode_pembayaran' => 'required|string|max:255',
            'diskon' => 'required|numeric|min:0|max:100',
            'total_harga' => 'required|numeric|min:0',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Menyimpan data penjualan
        Penjualan::create([
            'tanggal_waktu' => $request->tanggal_waktu,
            'no_transaksi' => $request->no_transaksi,
            'nama_kasir' => $request->nama_kasir,
            'barang_terjual' => json_encode(explode(',', $request->barang_terjual)),
            'metode_pembayaran' => $request->metode_pembayaran,
            'diskon' => $request->diskon,
            'total_harga' => $request->total_harga,
            'jumlah' => $request->jumlah,
        ]);

        // Redirect ke halaman daftar penjualan
        return redirect()->route('penjualan.index');
    }


    public function show($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.show', compact('penjualan'));
    }

    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.edit', compact('penjualan'));
    }

    public function update(Request $request, $id)
    {
        $penjualan = Penjualan::find($id);
    
        // Mengonversi tanggal
        $tanggal_waktu = Carbon::createFromFormat('Y-m-d', $request->tanggal_waktu);
    
        // Update data
        $penjualan->update([
            'tanggal_waktu' => $tanggal_waktu,
            'no_transaksi' => $request->no_transaksi,
            'nama_kasir' => $request->nama_kasir,
            'barang_terjual' => json_encode(explode(',', $request->barang_terjual)), // Pastikan formatnya sesuai
            'metode_pembayaran' => $request->metode_pembayaran,
            'diskon' => $request->diskon,
            'total_harga' => $request->total_harga,
            'jumlah' => $request->jumlah,
        ]);
    
        return redirect()->route('penjualan.index');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();

        return redirect()->route('penjualan.index');
    }
}