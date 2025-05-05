<?php

namespace App\Http\Controllers;

use App\Models\TPeriode;
use Illuminate\Http\Request;

class TPeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $t_periode = TPeriode::all();
        return view('tperiode.index', compact('t_periode'));
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
    public function show(TPeriode $tPeriode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TPeriode $tPeriode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TPeriode $tPeriode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TPeriode $tPeriode)
    {
        //
    }
}
