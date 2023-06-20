<?php

namespace App\Http\Controllers;

use App\Models\AsignaProtagonista;
use Illuminate\Http\Request;

class AsignaProtagonistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        AsignaProtagonista::where("id_pelicula",$request->id_pelicula)->delete();
        if(isset($request->protagonistas)) {
            foreach ($request->protagonistas as $protagonista) {
                AsignaProtagonista::create([
                    "id_pelicula" => $request->id_pelicula,
                    "id_protagonista" => $protagonista
                ]);
            }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AsignaProtagonista  $asignaProtagonista
     * @return \Illuminate\Http\Response
     */
    public function show(AsignaProtagonista $asignaProtagonista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AsignaProtagonista  $asignaProtagonista
     * @return \Illuminate\Http\Response
     */
    public function edit(AsignaProtagonista $asignaProtagonista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AsignaProtagonista  $asignaProtagonista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsignaProtagonista $asignaProtagonista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AsignaProtagonista  $asignaProtagonista
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsignaProtagonista $asignaProtagonista)
    {
        //
    }
}
