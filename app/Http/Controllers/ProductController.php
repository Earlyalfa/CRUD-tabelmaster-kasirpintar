<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Menampilkan semua produk.
     *
     * 
     */
    public function index()
    {
        $products = Product::all(); 
        return view('products.index', compact('products')); 
    }

    // Menampilkan ID
    public function show($id)
    {
        $product = Product::findOrFail($id); 
        return view('products.show', compact('product')); 
    }
}
