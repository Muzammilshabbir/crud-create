<?php

namespace App\Http\Controllers;

use App\Models\Reproductor;
use Illuminate\Http\Request;

class ReproductorController extends Controller
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
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[

            "nombre"=>"required",
            "padre"=>"required",
            "madre" => "required",            
            "padre_padre"=>"required",
            "padre_madre"=>"required",
            "madre_padre" => "required",            
            "madre_madre"=>"required",
            "cantidad"=>"required|numeric",
            
        ]);
 
        $reproductor = new Reproductor;
        $reproductor->nombre = $request->nombre;
        $reproductor->padre = $request->padre;
        $reproductor->madre = $request->madre;
        $reproductor->padre_padre = $request->padre_padre;
        $reproductor->padre_madre = $request->padre_madre;
        $reproductor->madre_padre = $request->madre_padre;
        $reproductor->madre_madre = $request->madre_madre;
        $reproductor->cantidad = $request->cantidad;

        $reproductor->save();

        return response()->json(['message'=>'record created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reproductor  $reproductor
     * @return \Illuminate\Http\Response
     */
    public function show(Reproductor $reproductor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reproductor  $reproductor
     * @return \Illuminate\Http\Response
     */
    public function edit(Reproductor $reproductor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reproductor  $reproductor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reproductor $reproductor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reproductor  $reproductor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reproductor $reproductor)
    {
        //
    }
}
