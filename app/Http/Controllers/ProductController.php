<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Menampilkan semua produk.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua produk dari database
        $products = Product::all();

        // Kirim data produk ke view 'products.index'
        return view('products.index', compact('products'));
    }
}
