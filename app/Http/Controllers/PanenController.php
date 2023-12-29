<?php

namespace App\Http\Controllers;
use App\Models\Panen;

use Illuminate\Http\Request;

class PanenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // app/Http/Controllers/PanenController.php

public function index()
{
    $panens = Panen::all();
    return view('panen.index', compact('panens'));
}

public function create()
{
    return view('panen.create');
}

public function store(Request $request)
{
    Panen::create($request->all());
    return redirect()->route('panen.index');
}

public function edit(Panen $panen)
{
    return view('panen.edit', compact('panen'));
}

public function update(Request $request, Panen $panen)
{
    $panen->update($request->all());
    return redirect()->route('panen.index');
}

public function destroy(Panen $panen)
{
    $panen->delete();
    return redirect()->route('panen.index');
}
}
