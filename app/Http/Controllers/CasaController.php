<?php

namespace App\Http\Controllers;

use App\Models\Casa;
use Illuminate\Http\Request;

class CasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $todas = Casa::all();
        return view('casa.index',compact('todas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('casa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $nuevo = new Casa();
        $nuevo->fill($request->all());
        $nuevo->save();
        return redirect(route('casas.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Casa $casa)
    {
        return view('casa.show' , compact('casa') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Casa $casa)
    {
        return view('casa.edit' , compact('casa') );
  


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Casa $casa)
    {

        $casa->fill($request->all());
        $casa->save();
        return redirect(route('casas.index'));



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Casa $casa)
    {
        $casa->delete();
        return redirect(route('casas.index'));

    }
}
