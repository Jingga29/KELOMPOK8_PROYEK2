<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabaRugi;

class LabaRugiController extends Controller
{
    public function index()
    {
        $labas = LabaRugi::all();
        return view('laba.index', compact('labas'));
    }

    public function create()
    {
        return view('laba.create');
    }

    public function store(Request $request)
    {
        LabaRugi::create($request->all());
        return redirect()->route('laba.index')->with('success', 'Data laba berhasil ditambahkan.');
    }

    public function edit(LabaRugi $laba)
    {
        return view('laba.edit', compact('laba'));
    }

    public function update(Request $request, LabaRugi $laba)
    {
        $laba->update($request->all());
        return redirect()->route('laba.index')->with('success', 'Data laba berhasil diperbarui.');
    }

    public function destroy(LabaRugi $laba)
    {
        $laba->delete();
        return redirect()->route('laba.index')->with('success', 'Data laba berhasil dihapus.');
    }
}