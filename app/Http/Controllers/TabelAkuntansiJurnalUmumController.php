<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiJurnalUmum;
use Illuminate\Http\Request;

class TabelAkuntansiJurnalUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabel_akuntansi_jurnal_umum = TabelAkuntansiJurnalUmum::all();
        return view('tabelakuntansijurnalumum.index', compact('tabel_akuntansi_jurnal_umum'));
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
    public function show(TabelAkuntansiJurnalUmum $tabelAkuntansiJurnalUmum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TabelAkuntansiJurnalUmum $tabelAkuntansiJurnalUmum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TabelAkuntansiJurnalUmum $tabelAkuntansiJurnalUmum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TabelAkuntansiJurnalUmum $tabelAkuntansiJurnalUmum)
    {
        //
    }
}
