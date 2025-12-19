<?php

namespace App\Http\Controllers;

use App\Models\Trabajo;
use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $trabajos = Trabajo::whereIn('estado', ['pendiente','en_camino'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('trabajos.index', compact('trabajos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('trabajos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'cliente_nombre' => 'required|string|max:80',
            'telefono' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
            'tipo_servicio' => 'required|string|max:255',
        ]);

        Trabajo::create([
            'cliente_nombre' => $request->cliente_nombre,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'tipo_servicio' => $request->tipo_servicio,
            'estado' => 'pendiente',
        ]);

        return redirect()->route('trabajos.index')
            ->with('success', 'Trabajo registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trabajo $trabajo)
    {
        //
        return view('trabajos.show', compact('trabajo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trabajo $trabajo)
    {
        //
        return view('trabajos.edit', compact('trabajo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trabajo $trabajo)
    {
        //
        $request->validate([
            'cliente_nombre' => 'required|string|max:80',
            'telefono' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
            'tipo_servicio' => 'required|string|max:255',
            'estado' => 'required|in:pendiente,en_camino,completado,cobrado',
        ]);

        $trabajo->update($request->all());

        return redirect()->route('trabajos.index')
            ->with('success', 'Trabajo actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trabajo $trabajo)
    {
        //
    }
}
