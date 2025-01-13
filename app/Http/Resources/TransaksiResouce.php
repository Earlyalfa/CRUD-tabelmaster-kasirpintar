<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiResouce extends Controller
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'tanggal_transaksi' => $this->tanggal_transaksi,
            'id_produk' => $this->id_produk,
            'nama_produk' => $this->nama_produk,
            'kategori' => $this->kategori,
            'jumlah' => $this->jumlah,
            'harga_satuan' => $this->harga_satuan,
            'sub_total' => $this->sub_total,
            'total_transaksi' => $this->total_transaksi,
            'diskon' => $this->diskon,
            'metode_pembayaran' => $this->metode_pembayaran,
            'status_pembayaran' => $this->status_pembayaran,
            'keterangan' => $this->keterangan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
