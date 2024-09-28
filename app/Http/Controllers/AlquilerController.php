<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlquilerRequest;
use App\Models\Alquilere;
use App\Models\Bicicleta;
use App\Models\Centro;
use App\Models\Factura;
use App\Models\Profile;
use App\Models\Salida;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Centro $centro)
    {
        $id = $centro->id;
        $ciclas = $centro->ciclas;
        // $alquileres = Alquilere::whereIn('bicicleta_id', $ciclas->pluck('id'))->get();

        $alquileres = Alquilere::whereIn('bicicleta_id', $ciclas->pluck('id'))
        ->with('facturas') // Cargar las facturas relacionadas
        ->get();
        // dd($alquileres);
        return view('alquileres.index',compact('alquileres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alquileres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlquilerRequest $request)
    {
        $cicla = Bicicleta::where('id', $request->bicicleta_id)->first();
        if ($cicla->estado === 'Activo') {
            $alquiler = Alquilere::create($request->all());
            Salida::create([
                'estado' => 1,
                'hora_salida' => $request->hora_inicio,
                'alquiler_id' => $alquiler->id
            ]);
            $cicla->update([
                'estado' => 'Inactivo'
            ]);
            return redirect()->route('alquileres.user');
        }
        else{
            return redirect()->route('alquileres.create');
        }
        
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
    public function edit(Alquilere $alquilere)
    {
        return view('alquileres.edit', compact('alquilere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlquilerRequest $request, Alquilere $alquilere)
    {
        $alquilere->update($request->all());
        $salida = Salida::where('alquiler_id', $alquilere->id);
        $cicla = Bicicleta::where('id', $alquilere->bicicleta_id)->first();
        // dd(($cicla->precio) * (3.2));
        if($alquilere->hora_fin){
            $salida->update([
                'estado' => 0, 
            ]);
            $cicla->update([
                'estado' => 'Activo'
            ]);
            $this->factura($alquilere);
        }
        return redirect()->route('alquileres.user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alquilere $alquilere)
    {
        $alquilere->delete();
        return redirect()->route('alquileres.user');
    }

    public function factura(Alquilere $alquilere) 
    {
        $bicicleta = Bicicleta::where('id', $alquilere->bicicleta_id)->first();
        $fecha_1 = Carbon::parse($alquilere->hora_inicio);
        $fecha_2 = Carbon::parse($alquilere->hora_fin);
        $diferencia = $fecha_1->diffInHours($fecha_2);
        $horas = ceil($diferencia);
        $costo = $bicicleta->precio;
        $precio = ceil($horas) * $costo;
        $fechaActual = Carbon::now();
        // dd($diferencia);
        Factura::create([
            'fecha' => $fechaActual->format('y/m/d'),
            'total' => $precio,
            'alquiler_id' => $alquilere->id

        ]);
    }
    public function user()
    {
        $id = Auth::id();
        $perfil = Profile::where('user_id', $id)->first();
        // dd($perfil);
        $alquileres = Alquilere::where('documento', $perfil->documento)->get();
        return view('alquileres.user', compact('alquileres','perfil'));
    }
}
