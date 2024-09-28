<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionsRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permisos = Permission::all();
        return view('permisos.index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionsRequest $request)
    {
        Permission::create($request->all());
        return redirect()->route('permisos.index');
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
    public function edit(Permission $permiso)
    {
        return view('permisos.edit', compact('permiso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionsRequest $request, Permission $permiso)
    {
        $permiso->update($request->all());
        return redirect()->route('permisos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permiso)
    {
        $permiso->delete();
        return redirect()->route('permisos.index');
    }
}
