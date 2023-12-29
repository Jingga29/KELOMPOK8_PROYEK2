<?php

namespace App\Http\Controllers;

use App\Models\Bop;
use Illuminate\Http\Request;

class BopController extends Controller
{
    public function index()
    {
        $bops = Bop::all();
        $totalBOP = Bop::sum('nominal');

        return view('bop.index', compact('bops', 'totalBOP'));
    }

    public function create()
    {
        return view('bop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'item' => 'required|string',
            'nominal' => 'required|integer',
        ]);

        Bop::create($request->all());

        return redirect()->route('bop.index')->with('success', 'Data BOP berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $bop = Bop::findOrFail($id);

        return view('bop.edit', compact('bop'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'item' => 'required|string',
            'nominal' => 'required|integer',
        ]);

        $bop = Bop::findOrFail($id);
        $bop->update($request->all());

        return redirect()->route('bop.index')->with('success', 'Data BOP berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $bop = Bop::findOrFail($id);
        $bop->delete();

        return redirect()->route('bop.index')->with('success', 'Data BOP berhasil dihapus.');
    }
}