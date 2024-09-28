<?php

namespace App\Http\Controllers;

use App\Http\Requests\CentroRequest;
use App\Models\Centro;
use App\Models\Profile;
use App\Models\Regionale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Regionale $regional)
    {

        
        $centros = Centro::where('regional_id', $regional->id)->get();
        return view('centros.index', compact('centros', 'regional'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Regionale $regional)
    {
        return view('centros.create', compact('regional'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CentroRequest $request, Regionale $regional)
    {
        $centro = Centro::create($request->all());
        $regional = Regionale::where('id', $centro->regional_id)->first();
        
        return redirect()->route('centros.index', compact('regional'));

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
    public function edit(Centro $centro)
    {
        $regional = Regionale::where('id', $centro->regional_id)->first();
        return view('centros.edit', compact('centro', 'regional'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CentroRequest $request, Centro $centro)
    {
        $centro->update($request->all());
        $regional = Regionale::where('id', $centro->regional_id)->first();
        
        return redirect()->route('centros.index', compact('regional'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centro $centro)
    {
        $regional = Regionale::where('id', $centro->regional_id)->first();
        $centro->delete();
        return redirect()->route('centros.index', compact('regional'));
    }
}
