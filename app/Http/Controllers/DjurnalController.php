<?php

namespace App\Http\Controllers;

use App\Models\Djurnal;
use Illuminate\Http\Request;

class DjurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $djurnal = Djurnal::all();
        return view("djurnal.index", compact("djurnal"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Djurnal $djurnal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Djurnal $djurnal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Djurnal $djurnal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Djurnal $djurnal)
    {
        //
    }
}
