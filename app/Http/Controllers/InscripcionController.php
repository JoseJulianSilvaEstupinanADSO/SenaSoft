<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscripcionRequest;
use App\Models\Bicicleta;
use App\Models\Centro;
use App\Models\Evento;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Evento $evento)
    {
        // dd($evento);
        $inscripciones = Inscripcion::where('evento_id', $evento->id)->get();
        return view('inscripciones.index', compact('inscripciones', 'evento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Evento $evento)
    {
        $id_centro = $evento->centro->id;
        $evento_id = $evento->id;
        $bicicletasDisponibles = Bicicleta::where('centro_id', $id_centro) // Filtra por centro
            ->whereNotIn('id', function ($query) use ($evento_id) {
                $query->select('bicicleta_id')
                    ->from('inscripcions')
                    ->where('evento_id', $evento_id);
            })
            ->get()->pluck('id', 'id');
        // dd($bicicletasDisponibles);
        return view('inscripciones.create',compact('evento','bicicletasDisponibles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InscripcionRequest $request)
    {
        // dd();
        Inscripcion::create($request->all());
        $evento = Evento::where('id', $request->evento_id)->first();
        return redirect()->route('inscripciones.index', compact('evento'));
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
    public function edit(Inscripcion $inscripcione)
    {
        return view('inscripciones.edit', compact('inscripciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InscripcionRequest $request, Inscripcion $inscripcion)
    {
        $inscripcion->update($request->all());
        $evento = Evento::where('id', $request->evento_id);
        return redirect()->route('inscripciones.index', compact('evento'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscripcion $inscripcione)
    {
        $evento = Evento::where('id', $inscripcione->evento_id)->first();
        $inscripcione->delete();
        return redirect()->route('inscripciones.index', compact('evento'));
    }
}
