<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiMaster;
use Illuminate\Http\Request;

class TabelAkuntansiMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabel_akuntansi_master = TabelAkuntansiMaster::all();
        return view('tabelakuntansimaster.index', compact('tabel_akuntansi_master'));
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
    public function show(TabelAkuntansiMaster $tabelAkuntansiMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TabelAkuntansiMaster $tabelAkuntansiMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TabelAkuntansiMaster $tabelAkuntansiMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TabelAkuntansiMaster $tabelAkuntansiMaster)
    {
        //
    }
}
