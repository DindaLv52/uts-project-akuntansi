<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiTransaksi;
use Illuminate\Http\Request;

class TabelAkuntansiTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tabel_akuntansi_transaksi = TabelAkuntansiTransaksi::all();
        return view("tabelakuntansitransaksi.index", compact('tabel_akuntansi_transaksi'));
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
    public function show(TabelAkuntansiTransaksi $tabelAkuntansiTransakti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TabelAkuntansiTransaksi $tabelAkuntansiTransakti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TabelAkuntansiTransaksi $tabelAkuntansiTransakti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TabelAkuntansiTransaksi $tabelAkuntansiTransakti)
    {
        //
    }
}
