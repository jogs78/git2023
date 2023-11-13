<?php

namespace App\Http\Controllers;

use App\Models\Terreno;
use Illuminate\Http\Request;

class TerrenoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Terreno::all();
        return view('terreno.listar',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('terreno.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo = new Terreno();
//        $nuevo->servicio = $request->input('servicio');
//        $nuevo->direccion = $request->input('direccion');
        $nuevo->fill($request->all());
        $nuevo->save();
        return redirect(route('terrenos.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Terreno $terreno)
    {
        return view('terreno.mostar',compact('terreno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Terreno $terreno)
    {
        return view('terreno.editar',compact('terreno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Terreno $terreno)
    {
        $terreno->fill($request->all());
        $terreno->save();
        return redirect(route('terrenos.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Terreno $terreno)
    {
        $terreno->delete();
        return redirect(route('terrenos.index'));
    }
}
