<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $descuentos=Descuento::all();
        return view("descuento.index", compact("descuentos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("descuento.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "descripcion"=>"required|max:255|min:10",

        ],[
            "descripcion.required"=>"El campo descripción es obligatorio",
            "descripcion.max"=>"La longitud es máximo de 255 caracteres",
            "descripcion.min"=>"La longitud es minima de 10 caracteres",

        ]);
        //dd($request->all());

        Descuento::create([
            "desc_desc"=>$request->descripcion,
            "porcentaje"=>$request->descuento
        ]);

        return redirect()->route("descuentos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function show(Descuento $descuento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function edit(Descuento $descuento)
    {
        return view("descuento.edit",compact("descuento"));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descuento $descuento)
    {
        $request->validate([
            "descripcion"=>"required|max:255|min:10",

        ],[
            "descripcion.required"=>"El campo descripción es obligatorio",
            "descripcion.max"=>"La longitud es máximo de 255 caracteres",
            "descripcion.min"=>"La longitud es minima de 10 caracteres",

        ]);

        $descuento->update([
            "desc_desc"=>$request->descripcion,
            "porcentaje"=>$request->descuento
        ]);

        return redirect()->route("descuentos.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Descuento $descuento)
    {
        $descuento->delete();
        return redirect()->back();

        //
    }
}
