<?php

namespace App\Http\Controllers;

use App\Models\Perkiraan;
use Illuminate\Http\Request;

class PerkiraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perkiraan = Perkiraan::all();
        return view("perkiraan.index", compact("perkiraan"));
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
    public function show(Perkiraan $perkiraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perkiraan $perkiraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perkiraan $perkiraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perkiraan $perkiraan)
    {
        //
    }
}
