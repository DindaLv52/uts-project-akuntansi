<?php

namespace App\Http\Controllers;

use App\Models\TPerkiraan;
use Illuminate\Http\Request;

class TPerkiraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $t_perkiraan = TPerkiraan::all();
        return view('tperkiraan.index', compact('t_perkiraan'));
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
    public function show(TPerkiraan $tPerkiraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TPerkiraan $tPerkiraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TPerkiraan $tPerkiraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TPerkiraan $tPerkiraan)
    {
        //
    }
}
