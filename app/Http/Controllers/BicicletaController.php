<?php

namespace App\Http\Controllers;

use App\Http\Requests\BicicletaRequest;
use App\Models\Bicicleta;
use App\Models\Centro;
use Illuminate\Http\Request;

class BicicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Centro $centro)
    {
        $bicicletas = Bicicleta::where('centro_id', $centro->id)->get();
        return view('bicicletas.index', compact('bicicletas', 'centro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Centro $centro)
    {
        return view('bicicletas.create', compact('centro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BicicletaRequest $request)
    {
        Bicicleta::create($request->all());
        $centro = Centro::where('id', $request->centro_id)->first();

        return redirect()->route('bicicletas.index', compact('centro'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bicicleta $bicicleta)
    {
        $centro = Centro::where('id', $bicicleta->centro_id)->first();
        return view('bicicletas.edit', compact('bicicleta', 'centro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BicicletaRequest $request, Bicicleta $bicicleta)
    {
        $bicicleta->update($request->all());
        $bicicletas = Bicicleta::where('centro_id', $request->centro_id);
        $centro = Centro::where('id', $bicicleta->centro_id)->first();
        return  redirect()->route('bicicletas.index', compact('bicicletas', 'centro'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicicleta $bicicleta)
    {
        $bicicleta->delete();
        
        return redirect()->route('bicicletas.index');
    }
}
