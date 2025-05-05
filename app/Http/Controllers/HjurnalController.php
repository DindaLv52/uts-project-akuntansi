<?php

namespace App\Http\Controllers;

use App\Models\Hjurnal;
use Illuminate\Http\Request;

class HjurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hjurnal = Hjurnal::all();
        return view("hjurnal.index", compact("hjurnal"));
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
    public function show(Hjurnal $hjurnal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hjurnal $hjurnal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hjurnal $hjurnal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hjurnal $hjurnal)
    {
        //
    }
}
