<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventoRequest;
use App\Models\Centro;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Centro $centro)
    {
        $eventos = Evento::where('centro_id', $centro->id)->get();
        return view('eventos.index', compact('eventos','centro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Centro $centro)
    {
        return view('eventos.create', compact('centro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventoRequest $request)
    {
        Evento::create($request->all());
        $centro = Centro::where('id', $request->centro_id)->first();
        return redirect()->route('eventos.index', compact('centro'));
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
    public function edit(Evento $evento)
    {
        $centro = Centro::where('id', $evento->centro_id)->first();
        return view('eventos.edit', compact('evento','centro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventoRequest $request, Evento $evento)
    {
        $centro = Centro::where('id', $evento->centro_id)->first();
        $evento->update($request->all());
        return redirect()->route('eventos.index', compact('centro'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        $centro = Centro::where('id', $evento->centro_id)->first();
        $evento->delete();
        return redirect()->route('eventos.index', compact('centro'));
    }
    public function allevent()
    {
        $eventos = Evento::all();
        
        return view('eventos.todos', compact('eventos'));
    }
}