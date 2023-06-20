<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use Illuminate\Http\Request;

class DiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dias=Dia::all();

        return view("dias.index",compact("dias"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dias.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        Dia::create([
            "descripcion_d"=>$request->descripcion,
            
        ]);
        return redirect()->route("dias.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Dia $dia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dia $dia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dia $dia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dia $dia)
    {
        $dia->delete();
        return redirect()->route("dias.index");
    }
}
