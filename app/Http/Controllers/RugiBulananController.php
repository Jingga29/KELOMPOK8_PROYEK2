<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RugiBulanan;

class RugiBulananController extends Controller
{
    public function index()
    {
        $rugi_bulanan = RugiBulanan::all();
        return view('rugi_bulanan.index', compact('rugi_bulanan'));
    }

    public function create()
    {
        return view('rugi_bulanan.create');
    }

    public function store(Request $request)
    {
        RugiBulanan::create($request->all());
        return redirect()->route('rugi_bulanan.index');
    }

    public function edit(RugiBulanan $rugi_bulanan)
    {
        return view('rugi_bulanan.edit', compact('rugi_bulanan'));
    }

    public function update(Request $request, RugiBulanan $rugi_bulanan)
    {
        $rugi_bulanan->update($request->all());
        return redirect()->route('rugi_bulanan.index');
    }

    public function destroy(RugiBulanan $rugi_bulanan)
    {
        $rugi_bulanan->delete();
        return redirect()->route('rugi_bulanan.index');
    }
}
