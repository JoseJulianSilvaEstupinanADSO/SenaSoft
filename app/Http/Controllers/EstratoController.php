<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstratoRequest;
use App\Models\Estrato;
use Illuminate\Http\Request;

class EstratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estratos = Estrato::all();
        return view('estratos.index', compact('estratos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estratos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstratoRequest $request)
    {
        Estrato::create($request->all());
        return redirect()->route('estratos.index');
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
    public function edit(Estrato $estrato)
    {
        return view('estratos.edit', compact('estrato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EstratoRequest $request, Estrato $estrato)
    {
        $estrato->update($request->all());
        return redirect()->route('estratos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estrato $estrato)
    {
        $estrato->delete();
        return redirect()->route('estratos.index');
    }
}
