<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos=Genero::all();

        return view("generos.index",compact("generos"));
        //return "hola desde el controlador";

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("generos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Genero::create([
            "descripcion_g"=>$request->genero,  
        ]);
        return redirect()->route("generos.index");


        
    }

    /**
     * Display the specified resource.
     */
    public function show(generos $generos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(generos $generos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, generos $generos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(generos $genero)
    {
        //$genero->delete();
        //return redirect()->route("generos.index");
        
    }
}
