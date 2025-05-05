<?php

namespace App\Http\Controllers;

use App\Models\TabelSetupGlPeriode;
use Illuminate\Http\Request;

class TabelSetupGlPeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabel_setup_gl_periode = TabelSetupGlPeriode::all();
        return view('tabelsetupglperiode.index', compact('tabel_setup_gl_periode'));
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
    public function show(TabelSetupGlPeriode $tabelSetupGlPeriode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TabelSetupGlPeriode $tabelSetupGlPeriode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TabelSetupGlPeriode $tabelSetupGlPeriode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TabelSetupGlPeriode $tabelSetupGlPeriode)
    {
        //
    }
}
