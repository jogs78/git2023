<?php

namespace App\Http\Controllers;

use App\Models\Terreno;
use App\Http\Requests\TerrenoRequest;

class TerrenoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response(Terreno::all());   //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TerrenoRequest $request)
    {
        $nueva = new Terreno();
        $nueva->fill($request->all());
        $nueva->save();
        return response()->json($nueva,201);    }

    /**
     * Display the specified resource.
     */
    public function show(Terreno $terreno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TerrenoRequest $request, Terreno $terreno)
    {
        $terreno->fill($request->all());
        $terreno->save();
        return response()->json($terreno,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Terreno $terreno)
    {
        $terreno->delete();
        return response()->json($terreno,200);
    }
}
