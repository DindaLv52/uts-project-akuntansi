<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiJurnalMasuk;
use Illuminate\Http\Request;

class TabelAkuntansiJurnalMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabel_akuntansi_jurnal_masuk = TabelAkuntansiJurnalMasuk::all();
        return view('tabelakuntansijurnalmasuk.index', compact('tabel_akuntansi_jurnal_masuk'));
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
    public function show(TabelAkuntansiJurnalMasuk $tabelAkuntansiJurnalMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TabelAkuntansiJurnalMasuk $tabelAkuntansiJurnalMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TabelAkuntansiJurnalMasuk $tabelAkuntansiJurnalMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TabelAkuntansiJurnalMasuk $tabelAkuntansiJurnalMasuk)
    {
        //
    }
}
