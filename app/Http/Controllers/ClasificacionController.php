<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clasificaciones=Clasificacion::all();

        return view("clasificaciones.index",compact("clasificaciones"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clasificaciones.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //dd($request->all());

        Clasificacion::create([
            "desc_clas"=>$request->clasificacion
        ]);
        return redirect()->route("clasificaciones.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Clasificacion $clasificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clasificacion $clasificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clasificacion $clasificacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clasificacion $clasificacion)
    {
        //
    }
}
