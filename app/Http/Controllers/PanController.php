<?php

namespace App\Http\Controllers;

use App\Models\Pan;
use Illuminate\Http\Request;

class PanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $select_panes = session('Select_panes', []);
        $cantidad_pan = session('cantidad_pan', []);

        // Verificar si hay productos seleccionados
        if (!empty($select_panes)) {
            // Lógica para cuando hay productos seleccionados
            $panesSeleccionados = Pan::whereIn('id', $select_panes)->get();
        } else {
            $panesSeleccionados = collect(); // Una colección vacía o cualquier otro valor predeterminado
        }

        // Calcular el total
        $total = $panesSeleccionados->sum(function ($pan) use ($cantidad_pan) {
            return $pan->Precio * $cantidad_pan[$pan->id];
        });

        // Lógica para otros productos (por ejemplo, todos los productos)
        $panes = Pan::paginate(8);

        // Tu lógica para mostrar la página con productos
        return view('packet', [
            'panes' => $panes,
            'panesSeleccionados' => $panesSeleccionados,
            'cantidad_pan' => $cantidad_pan,
            'total' => $total,
        ]);
    }

    public function index2()
    {
        $select_panes = session('Select_panes', []);
        $cantidad_pan = session('cantidad_pan', []);

        // Verificar si hay productos seleccionados
        if (!empty($select_panes)) {
            // Lógica para cuando hay productos seleccionados
            $panesSeleccionados = Pan::whereIn('id', $select_panes)->get();
        } else {
            $panesSeleccionados = collect(); // Una colección vacía o cualquier otro valor predeterminado
        }

        // Calcular el total
        $total = $panesSeleccionados->sum(function ($pan) use ($cantidad_pan) {
            return $pan->Precio * $cantidad_pan[$pan->id];
        });

        // Lógica para otros productos (por ejemplo, todos los productos)
        $panes = Pan::all();

        // Tu lógica para mostrar la página con productos
        return view('packetprueba', [
            'panes' => $panes,
            'panesSeleccionados' => $panesSeleccionados,
            'cantidad_pan' => $cantidad_pan,
            'total' => $total,
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
