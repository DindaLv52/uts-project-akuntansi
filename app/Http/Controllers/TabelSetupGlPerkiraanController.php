<?php

namespace App\Http\Controllers;

use App\Models\TabelSetupGlPerkiraan;
use Illuminate\Http\Request;

class TabelSetupGlPerkiraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabel_setup_gl_perkiraan = TabelSetupGlPerkiraan::paginate(10);
        return view('tabelsetupglperkiraan.index', compact('tabel_setup_gl_perkiraan'));
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
    public function show(TabelSetupGlPerkiraan $tabelSetupGlPerkiraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TabelSetupGlPerkiraan $tabelSetupGlPerkiraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TabelSetupGlPerkiraan $tabelSetupGlPerkiraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TabelSetupGlPerkiraan $tabelSetupGlPerkiraan)
    {
        //
    }
}
