<?php

namespace App\Http\Controllers;

use App\Models\Premio;
use App\Models\Persona;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PremioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $premio = Premio::all();
        // return response()->json($premio);

        $premios = Premio::orderBy('nombre')->paginate(10);
        return view('index', compact('premios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $premio = Premio::create($request->all());
        return response()->json($premio);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Premio  $premio
     * @return \Illuminate\Http\Response
     */
    public function show(Premio $premio)
    {
        // return $premio;
        return response()->json($premio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Premio  $premio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Premio $premio)
    {
        $premio->update($request->all());
        // return $premio;
        return response()->json($premio);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Premio  $premio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Premio $premio)
    {
        $premio->delete();
        return response()->json(null);

    }
}
