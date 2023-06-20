<?php

namespace App\Http\Controllers;

use App\Models\Protagonista;
use Illuminate\Http\Request;

class ProtagonistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $protagonistas=Protagonista::all();

        return view("protagonistas.index",compact("protagonistas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("protagonistas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Protagonista::create([
            "nombre_p"=>$request->prota,
            "ap_p"=>$request->ap,
            "am_p"=>$request->am,
        ]);
        return redirect()->route("protagonistas.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Protagonista $protagonista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Protagonista $protagonista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Protagonista $protagonista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Protagonista $protagonista)
    {
        $protagonista->delete();
        return redirect()->route("protagonistas.index");
    }
}
