<?php

namespace App\Http\Controllers;

use App\Models\Casa;
use Illuminate\Http\Request;
use App\Http\Requests\CasaRequest;

use Illuminate\Support\Facades\Response;

class CasaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Response::json(Casa::all())->header('Content-Type', 'application/json');
//        return response(Casa::all());   //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CasaRequest $request)
    {
        $nueva = new casa();
        $nueva->fill($request->all());
        $nueva->save();
        return response()->json($nueva,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Casa $casa)
    {
        return response()->json($casa,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CasaRequest $request, Casa $casa)
    {
        try {
            $this->authorize('update',$casa);
//        } catch (\Throwable $th) {
        } catch (\Illuminate\Auth\Access\AuthorizationException $th) {
            return response()->json("No estas autorizado para hacer esto.",403);
        }

//        return response()->json("update",200);        
        $casa->fill($request->all());
        $casa->save();
        return response()->json($casa,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Casa $casa)
    {
        $casa->delete();
        return response()->json($casa,204);
    }
}
