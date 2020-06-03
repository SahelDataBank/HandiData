<?php

namespace App\Http\Controllers;

use App\Indicateur;
use Illuminate\Http\Request;

class IndicateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'indicateur';
        $items = Indicateur::all();
        
        return view('handi-admin.adminindicateur.index',compact('active','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = 'indicateur';
        return view('handi-admin.adminindicateur.add',compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Indicateur  $indicateur
     * @return \Illuminate\Http\Response
     */
    public function show(Indicateur $indicateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indicateur  $indicateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicateur $indicateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indicateur  $indicateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicateur $indicateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Indicateur  $indicateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indicateur $indicateur)
    {
        //
    }
}
