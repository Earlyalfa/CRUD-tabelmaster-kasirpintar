<?php

namespace App\Http\Controllers;

use App\Http\Resources\PendapatanResource;
use App\Models\Pendapatan;
use Illuminate\Http\Request;

class PendapatanController extends Controller
{
    // Display a listing of the pendapatan (GET)
    public function index()
    {
        $pendapatan = Pendapatan::all(); // Get all pendapatan records from the table
        return view('pendapatan.index', compact('pendapatan'));
    }

    // Show the form for creating a new pendapatan (GET)
    public function create()
    {
        return view('pendapatan.create');
    }

    // Store a new pendapatan (POST)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'no_transaksi' => 'required|string|max:255',
            'pendapatan' => 'required|numeric',
            'metode_pembayaran' => 'required|string|max:255',
        ]);

        // Create a new pendapatan record
        Pendapatan::create($validated);

        return redirect()->route('pendapatan.index')->with('success', 'Pendapatan added successfully!');
    }

    // Show a specific pendapatan (GET)
    public function show($id)
    {
        $pendapatan = Pendapatan::findOrFail($id); // Find pendapatan by ID
        return view('pendapatan.show', compact('pendapatan'));
    }

    // Show the form for editing an existing pendapatan (GET)
    public function edit($id)
    {
        $pendapatan = Pendapatan::findOrFail($id);
        return view('pendapatan.edit', compact('pendapatan'));
    }

    // Update a specific pendapatan (PUT)
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'no_transaksi' => 'required|string|max:255',
            'pendapatan' => 'required|numeric',
            'metode_pembayaran' => 'required|string|max:255',
        ]);

        $pendapatan = Pendapatan::findOrFail($id);
        $pendapatan->update($validated);

        return redirect()->route('pendapatan.index')->with('success', 'Pendapatan updated successfully!');
    }

    // Delete a specific pendapatan (DELETE)
    public function destroy($id)
    {
        $pendapatan = Pendapatan::findOrFail($id);
        $pendapatan->delete();

        return redirect()->route('pendapatan.index')->with('success', 'Pendapatan deleted successfully!');
    }
}

